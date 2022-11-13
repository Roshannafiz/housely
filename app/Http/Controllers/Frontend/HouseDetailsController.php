<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\House;
use App\Models\Navbar;
use Illuminate\Http\Request;

class HouseDetailsController extends Controller
{
    public function house_detail($id)
    {
        $house_detail = House::find($id);
        return view('frontend.view.house-details', compact('house_detail'));
    }
}
