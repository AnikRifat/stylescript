<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use App\Models\CustomDesign;
use Illuminate\Http\Request;

class CustomDesignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getcatalog($id)
    {
        $catalogs = Catalog::where('custom_design_id', $id)->get();

        return response()->json($catalogs);
    }
    public function index()
    {
        $custom_designs = CustomDesign::with('catalogs')->get();
        return view('admin.pages.custom-design.index',compact('custom_designs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.custom-design.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // Validate the request data
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'catalog_names.*' => 'required|string|max:255',
            'catalog_fronts.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'catalog_backs.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Create a new custom design
        $customDesign = new CustomDesign([
            'title' => $request->input('title'),
            'image' => $request->file('image')->store('custom_designs', 'public'), // Store the image
        ]);

        $customDesign->save(); // Save the custom design to the database

        // Create catalogs associated with the custom design
        $catalogData = [];

        foreach ($request->input('catalog_names') as $index => $catalogName) {
            $frontImage = $request->file('catalog_fronts')[$index];
            $backImage = $request->file('catalog_backs')[$index];

            $frontImagePath = $frontImage->store('catalogs/fronts', 'public');
            $backImagePath = $backImage->store('catalogs/backs', 'public');

            $catalogData[] = [
                'name' => $catalogName,
                'front_image' => $frontImagePath,
                'back_image' => $backImagePath,
            ];
        }

        // Associate catalogs with the custom design and save them to the database
        $customDesign->catalogs()->createMany($catalogData);

        return redirect()->route('custom_designs.index')
            ->with('success', 'Custom design and catalogs created successfully.');
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CustomDesign  $customDesign
     * @return \Illuminate\Http\Response
     */
    public function show(CustomDesign $customDesign)
    {
        return view('admin.pages.custom-design.view',compact($customDesign));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CustomDesign  $customDesign
     * @return \Illuminate\Http\Response
     */
    public function edit(CustomDesign $customDesign)
    {
        // dd($customDesign);
        return view('admin.pages.custom-design.edit', compact('customDesign'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CustomDesign  $customDesign
     * @return \Illuminate\Http\Response
     */ public function update(Request $request, CustomDesign $customDesign)
    {
        // dd($request->all());
        // Validate the incoming request data if needed
        // $request->validate([...]);

        // Update the custom design
        $customDesign->update([
            'title' => $request->input('title'),
            // Add other fields you want to update here
        ]);

        // Handle image update if necessary (assuming you are using the intervention/image package)
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('custom-designs', 'public');
            $customDesign->image = $imagePath;
            $customDesign->save();
        }

        // Handle catalog updates if necessary
        // Loop through the catalogs and update them
        foreach ($request->input('catalog_names') as $key => $catalogName) {
            // Find the catalog by its ID (assuming you have a unique identifier for catalogs)
            $catalog = Catalog::find($request->input('catalog_ids')[$key]);

            // Update the catalog details
            $catalog->name = $catalogName;
            // Add other fields you want to update for catalogs here

            // Save the catalog changes
            $catalog->save();

            // Handle image update for the catalog if necessary
            if ($request->hasFile('catalog_fronts') && $request->hasFile('catalog_backs')) {
                // Update the front image (you can add similar code for the back image)
                $frontImagePath = $request->file('catalog_fronts')[$key]->store('catalogs/fronts', 'public');
                $catalog->front_image = $frontImagePath;
                $catalog->save();
            }
        }

        // Redirect back to the custom design index page with a success message
        return redirect()->route('custom_designs.index')->with('success', 'Custom Design updated successfully');
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
