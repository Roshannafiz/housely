<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\House;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search_house(Request $request)
    {
        $house = House::where('category_id', $request->category);
        $searching_houses = $house->get();
        return view('frontend.search.index', compact('searching_houses'));
    }
}
