<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\Models\Packages;
use App\Models\PackageItems;
use DB;

class PackagesController extends Controller
{
    public function index(Request $request)
    {
        if(view()->exists('admin_views.Pages.PackagesPage'))
        {
            $packages=Packages::latest()->get();
            $items=PackageItems::latest()->get();
            return view('admin_views.Pages.PackagesPage',['packages'=>$packages,'items'=>$items]);
        }
    }

    public function addPackage(Request $request)
    {
        DB::beginTransaction();
        try
        {
            $request->validate([
                'title'=>'required',
                'price'=>'required',
                'notes'=>'required',

            ]);
            $packages=new Packages($request->input());
            DB::commit();
            $packages->save();
            return redirect()->back();
        }
        catch(\Exception $e) {
            DB::rollBack();
            return $this->error($e->getMessage(), $e->getCode());
        }

    }

    public function addPackageItem(Request $request)
    {
        DB::beginTransaction();
        try
        {
            $request->validate([
                'item_name'=>'required',
                'notes'=>'required',
                'status'=>'required',
                'package_id'=>'required',

            ]);
            $packageItem=new PackageItems($request->input());
            DB::commit();
            $packageItem->save();
            return redirect()->back();
        }
        catch(\Exception $e) {
            DB::rollBack();
            return $this->error($e->getMessage(), $e->getCode());
        }
    }
}
