<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\Models\History;
USE DB;

class HistoryController extends Controller
{
    public function addHistory(Request $request)
    {
        DB::beginTransaction();
        try
        {
            $request->validate([
                'history'=>'required',

            ]);
            $history=new History($request->input());
            DB::commit();
            $history->save();
            return redirect()->back();
        }

        catch(\Exception $e) {
            DB::rollBack();
            return $this->error($e->getMessage(), $e->getCode());
        }

    }

    public function updateHistory(Request $request)
    {
        DB::beginTransaction();
        try
        {
            $history=History::findOrFail($request->id);
            $history->history=$request->input('history');
            DB::commit();
            $history->save();
            return redirect()->back();
        }

        catch(\Exception $e) {
            DB::rollBack();
            return $this->error($e->getMessage(), $e->getCode());
        }
    }
}
