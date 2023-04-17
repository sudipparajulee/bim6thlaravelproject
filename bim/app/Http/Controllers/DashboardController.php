<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use App\Models\Notice;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalnews = News::count();
        $totalcategories = Category::count();
        $totalnotices = Notice::count();
        return view('dashboard',compact('totalnews','totalcategories','totalnotices'));
    }
}
