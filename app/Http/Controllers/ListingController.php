<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    //get and show all listings
    public function index(Request $request){
        // this dd function is used to read whats passing through the url
        // dd(request('tag'));

        return view('listings.index', [
            //This gives the latest posts on top of the page
            // 'listings' =>Listing::latest()->get()

            // lets use  the following line to help the tag and search filtering process
            'listings' =>Listing::latest()->filter(request(['tag', 'search']))->get()

        ]);
    }

    //get and show single listing
    public function show(Listing $listing){
        return view('listings.show', [
            'listing'=> $listing
        ]);
    }
}
