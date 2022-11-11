<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\House;
use Illuminate\Http\Request;

class BuyController extends Controller
{
    public function index()
    {
        // Get House
        $houses = House::where('status', '=', 1)
            ->orderBy('id', 'DESC')
            ->paginate(9);

        return view('frontend.buy.index', compact('houses'));
    }
}
