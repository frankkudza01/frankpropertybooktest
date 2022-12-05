<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\Models\Theme;
use App\Models\ThemeImage;
use App\Models\Vision;
use App\Models\History;
use App\Models\Events;
use DB;

class AboutController extends Controller
{
    public function index(Request $request)
    {
        if(view()->exists('admin_views.Pages.AboutPage'))
        {
            $themes=Theme::latest()->take(1)->get();
            $themeImage=ThemeImage::latest()->take(1)->get();
            $vision=Vision::latest()->take(1)->get();
            $history=History::latest()->take(1)->get();
            $events=Events::latest()->get();
            return view('admin_views.Pages.AboutPage',['themes'=>$themes,'themeImage'=>$themeImage,'vision'=>$vision,'history'=>$history,'events'=>$events]);
        }
    }

    // Theme Title & Tagline

    public function addTheme(Request $request)
    {
        DB::beginTransaction();
        try
        {
            $request->validate([
                'theme_title'=>'required',
                'category'=>'required',
                'tagline'=>'required',
            ]);
            $theme=new Theme($request->input());
            DB::commit();
            $theme->save();
            return redirect()->back();
        }
        catch(\Exception $e) {
            DB::rollBack();
            return $this->error($e->getMessage(), $e->getCode());
        }

    }

    public function updateTheme(Request $request)
    {
        DB::beginTransaction();
        try
        {
            $themes=Theme::findOrFail($request->id);
            $themes->theme_title=$request->input('theme_title');
            $themes->category=$request->input('category');
            $themes->tagline=$request->input('tagline');
            DB::commit();
            $themes->save();
            return redirect()->back();
        }
        catch(\Exception $e) {
            DB::rollBack();
            return $this->error($e->getMessage(), $e->getCode());
        }
    }

}
