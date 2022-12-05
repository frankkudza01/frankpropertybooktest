<?php

namespace App\Http\Controllers\Management;

use App\Models\Vision;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use DB;

class VisionController extends Controller
{
    public function addVision(Request $request)
    {
        DB::beginTransaction();
        try
        {
            $request->validate([
                'vision'=>'required',

            ]);
            $vision=new Vision($request->input());
            DB::commit();
            $vision->save();
            return redirect()->back();
        }
        catch(\Exception $e) {
            DB::rollBack();
            return $this->error($e->getMessage(), $e->getCode());
        }

    }

    public function updateVision(Request $request)
    {
        DB::beginTransaction();
        try
        {
            $vision=Vision::findOrFail($request->id);
            $vision->vision=$request->input('vision');
            DB::commit();
            $vision->save();
            return redirect()->back();
        }
        catch(\Exception $e) {
            DB::rollBack();
            return $this->error($e->getMessage(), $e->getCode());
        }
    }
}
