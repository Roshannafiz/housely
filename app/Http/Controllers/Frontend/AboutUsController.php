<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Agent;
use App\Models\Navbar;
use App\Models\Subnavbar;
use App\Models\Work;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index()
    {
        // Get How To Work
        $how_works = Work::where('status', '=', 1)->get();
        // Get Agent
        $agents = Agent::where('status', '=', 1)->get();;

        return view('frontend.about.index', compact('how_works', 'agents'));
    }
}
