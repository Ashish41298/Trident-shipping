<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Cardbox;
use App\Models\Counter;
use App\Models\Slider;
use Illuminate\Http\Request;

class Providersdaat extends Controller
{
    public function getbannerdata(){
       $images = Slider::all();
       $counters = Counter::all();
       $boxcard = Cardbox::all();
    
        return view('pages.home', compact('images','counters','boxcard'));
    }
}
