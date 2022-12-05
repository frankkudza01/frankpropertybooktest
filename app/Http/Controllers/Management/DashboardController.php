<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        if(view()->exists('admin_views.Pages.DashaboardPage'))
        {
            return view('admin_views.Pages.DashaboardPage');
        }
    }
}
