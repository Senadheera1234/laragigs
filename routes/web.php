<?php

use Illuminate\Support\Facades\Route;
use App\Models\Listing;


//all Listings
Route::get('/', function () {
    return view('listings', [
        'heading' => "latest listings",
        'listings' =>Listing::all()
    ]);
});


//Single Listing
Route::get('/listings/{listing}', function(Listing $listing){
    return view('listing', [
        'listing'=> $listing
    ]);
    
});
