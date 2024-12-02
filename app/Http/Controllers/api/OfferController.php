<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Offer::all(), 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    /*public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $offer = Offer::create([
            'offer' => $request->offer,
            'description' => $request->description,
            'company' => $request->company,
            'status' => $request->status,
        ]);
        
        $offer->save();
        return response()->json($offer, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->json(Offer::find($id), 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    /*public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $offer = Offer::find($id);

        $offer->update([
            'offer' => $request->offer,
            'description' => $request->description,
            'company' => $request->company,
            'status' => $request->status,
        ]);

        $offer->save();
        return response()->json($offer, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Offer::find($id)->delete();
    }
}
