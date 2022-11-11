<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Feature;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    public function index()
    {
        // Get Feature
        $features = Feature::where('status', '=', 1)->get();

        return view('frontend.feature.index', compact('features'));
    }
}
