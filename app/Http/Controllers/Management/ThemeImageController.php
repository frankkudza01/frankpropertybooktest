<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\Models\ThemeImage;
use DB;

class ThemeImageController extends Controller
{
    public function addBannerImage(Request $request)
    {
        DB::beginTransaction();
        try
        {
            $themeImage=new ThemeImage($request->input());
            $file=$request->file('image');
            $fileName=time().'.'.$file->getClientOriginalExtension();
            $destinationPath=public_path('images/themes/');
            $file->move($destinationPath,$fileName);
            $themeImage->image=$fileName;

            DB::commit();
            $themeImage->save();
            return redirect()->back();
        }
        catch(\Exception $e) {
            DB::rollBack();
            return $this->error($e->getMessage(), $e->getCode());
        }
    }

    public function updateBannerImage(Request $request)
    {
        DB::beginTransaction();
        try
        {
            $themeImage=ThemeImage::findOrFail($request->id);
            $file=$request->file('image');
            $fileName=time().'.'.$file->getClientOriginalExtension();
            $destinationPath=public_path('images/themes/');
            $file->move($destinationPath,$fileName);
            $themeImage->image=$fileName;

            DB::commit();
            $themeImage->save();
            return redirect()->back();
        }
        catch(\Exception $e) {
            DB::rollBack();
            return $this->error($e->getMessage(), $e->getCode());
        }
    }
}
