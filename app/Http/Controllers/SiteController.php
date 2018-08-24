<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class SiteController extends Controller
{

    public function index(Request $request){
        $title = "Sites Campinas";
        return view('site.index', compact('title'));
    }

    public function teste(Request $request){
        //dd($request->session());
        $request->session()->forget('tinder-tools');
        $tinder_tools = array (
            //PURULETA
            "tinder-id" => "5b22a4a3fe07453631d88ea8",
            "tinder-tools-id" => 6,
            "tinder-token" => "3cfc13aa-b2e6-4257-a6da-f39b03cee8ae",
            "access-token-get-at" => Carbon::now(),
            "birth_date" => "1994-07-30",
            "gender" => 0,
            "name" => "Victor",
            "photos" => null,
            "ping_time" => null,
            "city" => "Campinas",
            "country" => "Brasil"
        );
        $request->session()->put('tinder-tools', $tinder_tools);
        return redirect('/tinder-tools');
    }

}