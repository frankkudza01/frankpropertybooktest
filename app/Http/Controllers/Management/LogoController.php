<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\Models\Logo;
use DB;

class LogoController extends Controller
{
    public function index(Request $request)
    {
        if(view()->exists('admin_views.Pages.LogoPage'))
        {
            $logo=Logo::latest()->take(1)->get();
            return view('admin_views.Pages.LogoPage',['logo'=>$logo]);
        }
    }

    public function addLogo(Request $request)
    {
        DB::beginTransaction();
        try
        {
            $logo=new Logo($request->input());
            $file=$request->file('logo');
            $fileName=time().'.'.$file->getClientOriginalExtension();
            $destinationPath=public_path('images/logos/');
            $file->move($destinationPath,$fileName);
            $logo->logo=$fileName;

            DB::commit();
            $logo->save();
            return redirect()->back();
        }
        catch(\Exception $e) {
            DB::rollBack();
            return $this->error($e->getMessage(), $e->getCode());
        }
    }

    public function updateLogo(Request $request)
    {
        DB::beginTransaction();
        try
        {
            $logo=Logo::findOrFail($request->id);
            $file=$request->file('logo');
            $fileName=time().'.'.$file->getClientOriginalExtension();
            $destinationPath=public_path('images/logos/');
            $file->move($destinationPath,$fileName);
            $logo->logo=$fileName;

            DB::commit();
            $logo->save();
            return redirect()->back();
        }
        catch(\Exception $e) {
            DB::rollBack();
            return $this->error($e->getMessage(), $e->getCode());
        }
    }
}
