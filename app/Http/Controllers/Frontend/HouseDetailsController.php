<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\House;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HouseDetailsController extends Controller
{
    public function house_detail(Request $request, $id)
    {
        $house_detail = House::find($id);
        return view('frontend.view.house-details', compact('house_detail'));
    }
}
