<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\Models\Events;
use DB;

class EventsController extends Controller
{
    public function addEvent(Request $request)
    {
        DB::beginTransaction();
        try
        {
            $events=new Events($request->input());
            DB::commit();
            $events->save();
            return redirect()->back();
        }

        catch(\Exception $e) {
            DB::rollBack();
            return $this->error($e->getMessage(), $e->getCode());
        }
    }
}
