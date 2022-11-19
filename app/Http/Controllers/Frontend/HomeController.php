<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Brand;
use App\Models\Category;
use App\Models\House;
use App\Models\Navbar;
use App\Models\Subnavbar;
use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        // Get Banner
        $banners = Banner::where('status', '=', 1)->get();
        // Get Category
        $categories = Category::where('status', '=', 1)->get();
        // Get How To Work
        $how_works = Work::where('status', '=', 1)->get();
        // Get Brand
        $brands = Brand::where('status', '=', 1)->get();
        // Get Feature House
        $feature_houses = House::where('status', '=', 1)
            ->where('it_feature', '=', 1)
            ->get();
        return view('frontend.index', compact('banners', 'categories', 'how_works', 'brands', 'feature_houses'));
    }
}
