<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\bookings;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class BookingsController extends Controller
{
    //
     //
/**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {
        //vallidate the request.....

        $bookings = new Bookings;
        $bookings->name = $request->name;
        $bookings->save();

        return redirect('/bookings');
    }

    /**
     * Display the specified resource.
     */
    public function show(bookings $bookings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(bookings $bookings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, bookings $bookings)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(bookings $bookings)
    {
        //
    }
}

