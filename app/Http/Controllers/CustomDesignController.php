<?php

namespace App\Http\Controllers;

use App\Models\CustomDesign;
use Illuminate\Http\Request;

class CustomDesignController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'thumbnail' => 'required',
            'images' => 'required',
            'colors' => 'required',
            'sizes' => 'required',
        ]);

        dd($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CustomDesign  $customDesign
     * @return \Illuminate\Http\Response
     */
    public function show(CustomDesign $customDesign)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CustomDesign  $customDesign
     * @return \Illuminate\Http\Response
     */
    public function edit(CustomDesign $customDesign)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CustomDesign  $customDesign
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CustomDesign $customDesign)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CustomDesign  $customDesign
     * @return \Illuminate\Http\Response
     */
    public function destroy(CustomDesign $customDesign)
    {
        //
    }
}
