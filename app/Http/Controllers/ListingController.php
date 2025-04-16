<?php

namespace App\Http\Controllers;
use App\Models\Listing;
use App\Models\Review;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listings = Listing::all();
        return view('listing.index', compact('listings'));
    }

    public function home()
    {
        $listings = Listing::all();
        return view('home', compact('listings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('listing.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'listing_title' => 'required',
            'address' => 'required',
            'phone' => 'required|unique:listings',
            'email' => 'required|email|unique:listings',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->storeAs('public/images', $imageName);

        }

        $listing = Listing::create($request->all());
        return redirect()->route('listing.index');
    }

    public function createReview(Reqeuest $request)
    {
        $review = Review::create($request->all());
        return redirect()->route('listing.details');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $listings = Listing::find($id);
        if (!$listings) {
        // Return a 404 error response, or redirect to another page, or show an error message, etc.
        return abort(404, 'Listing not found.');
    }
        return view('listing.details', compact('listings'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Listing $listing)
    {
        return view('listing.update', compact('listing'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
