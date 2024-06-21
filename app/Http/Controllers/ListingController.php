<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Faker\Provider\ar_EG\Company;

class ListingController extends Controller
{






    //get and show all listings
    public function index(Request $request)
    {
        // this dd function is used to read whats passing through the url
        // dd(request('tag'));

        return view('listings.index', [
            //This gives the latest posts on top of the page
            // 'listings' =>Listing::latest()->get()

            // lets use  the following line to help the tag and search filtering process
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(6)

        ]);
    }

    //get and show single listing
    public function show(Listing $listing)
    {
        return view('listings.show', [
            'listing' => $listing
        ]);
    }
    // show create form
    public function create()
    {
        return view('listings.create');
    }

    ////store Listing data

    // dd($request->all());
    // Store Listing Data
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('listings', 'company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        Listing::create($formFields);

        return redirect('/')->with('message', 'Listing created successfully!');
    }
    
}
