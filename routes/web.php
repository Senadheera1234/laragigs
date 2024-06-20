<?php

use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing


//all Listings
Route::get('/', [ListingController::class, 'index']);


//Single Listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);



