<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Theme;
use App\Models\ThemeImage;
use App\Models\Vision;
use App\Models\History;
use App\Models\Events;
use App\Models\Logo;
use App\Models\Packages;
use App\Models\PackageItems;
use DB;
use Carbon\Carbon;

class WebsiteController extends Controller
{
    public function index(Request $request)
    {
        if(view()->exists('client_views.Page.Landing'))
        {
            $theme=Theme::latest()->take(1)->get();
            $themeImage=ThemeImage::latest()->take(1)->get();
            $vision=Vision::latest()->take(1)->get();
            $history=History::latest()->take(1)->get();
            $events=Events::latest()->take(1)->get();
            $logo=Logo::latest()->take(1)->get();
            $packages=Packages::latest()->take(1)->get();
            $items=PackageItems::latest()->get();
            return view('client_views.Page.Landing',['theme'=>$theme,'themeImage'=>$themeImage,
            'vision'=>$vision,'history'=>$history,'events'=>$events,'logo'=>$logo,'packages'=>$packages,
            'items'=>$items
            ]);
        }
    }
}
