<?php

use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing.
//store - store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing


//in every form there should be names for every field


// +++++++++++++++++++++++++++++++++++
// In routes, the methods will be called in the controllers
//in this case, listing controllers
// *****************************************


//all Listings
Route::get('/', [ListingController::class, 'index']);



//show create form
Route::get('/listings/create', [ListingController::class, 'create']);


//store listing data
Route::post('/listings', [ListingController::class, 'store']);

//show edit form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

//update listing
Route::put('/listings/{listing}', [ListingController::class, 'update']);

//delete listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);

//Single Listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);



//2:14:50