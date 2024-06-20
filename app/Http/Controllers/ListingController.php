<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    //get and show all listings
    public function index(){
        return view('listings', [
            'heading' => "latest listings",
            'listings' =>Listing::all()
        ]);
    }

    //get and show single listing
    public function show(Listing $listing){
        return view('listing', [
            'listing'=> $listing
        ]);
    }
}
