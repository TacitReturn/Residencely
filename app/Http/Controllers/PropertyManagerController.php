<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePropertyManagerRequest;
use App\Http\Requests\UpdatePropertyManagerRequest;
use App\Models\PropertyManager;

class PropertyManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePropertyManagerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePropertyManagerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PropertyManager  $propertyManager
     * @return \Illuminate\Http\Response
     */
    public function show(PropertyManager $propertyManager)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PropertyManager  $propertyManager
     * @return \Illuminate\Http\Response
     */
    public function edit(PropertyManager $propertyManager)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePropertyManagerRequest  $request
     * @param  \App\Models\PropertyManager  $propertyManager
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePropertyManagerRequest $request, PropertyManager $propertyManager)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PropertyManager  $propertyManager
     * @return \Illuminate\Http\Response
     */
    public function destroy(PropertyManager $propertyManager)
    {
        //
    }
}
