<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use App\Models\CustomDesign;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

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
        // dd($custom_designs);
        return view('admin.pages.custom-design.index', compact('custom_designs'));
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

        if ($request->file('image')) {
            $mi = $request->file('image');
            $miName = time() . '.' . $mi->extension();

            $img = Image::make($mi->path());
            $img->fit(530, 630); // resize the fi to fit within 380x310 while preserving aspect ratio
            $img->encode('jpg', 80); // convert fi to JPEG format with 80% quality and reduce file size to 80kb
            $img->save(base_path('uploads/catalogs/') . $miName);
            $mainImagePath = $miName;
        }
        // Create a new custom design
        $customDesign = new CustomDesign([
            'title' => $request->input('title'),
            'image' => $mainImagePath,
            // Store the image
        ]);

        $customDesign->save(); // Save the custom design to the database

        // Create catalogs associated with the custom design
        $catalogData = [];

        foreach ($request->input('catalog_names') as $index => $catalogName) {
            $frontImage = $request->file('catalog_fronts')[$index];
            $backImage = $request->file('catalog_backs')[$index];


            $fi = $frontImage;
            $fiName = time() . '.' . $fi->extension();

            $img = Image::make($fi->path());
            $img->fit(530, 630); // resize the fi to fit within 380x310 while preserving aspect ratio
            $img->encode('jpg', 80); // convert fi to JPEG format with 80% quality and reduce file size to 80kb
            $img->save(base_path('uploads/catalogs/fronts/') . $fiName);
            $frontImagePath = $fiName;

            $bi = $backImage;
            $biName = time() . '.' . $bi->extension();

            $img = Image::make($bi->path());
            $img->fit(530, 630); // resize the fi to fit within 380x310 while preserving aspect ratio
            $img->encode('jpg', 80); // convert fi to JPEG format with 80% quality and reduce file size to 80kb
            $img->save(base_path('uploads/catalogs/backs/') . $biName);
            $backImagePath = $biName;






            // $frontImagePath = $frontImage->store('catalogs/fronts', 'public');
            // $backImagePath = $backImage->store('catalogs/backs', 'public');

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
        return view('admin.pages.custom-design.view', compact($customDesign));
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
     */public function update(Request $request, CustomDesign $customDesign)
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
            $mi = $request->file('image');
            $miName = time() . '.' . $mi->extension();

            $img = Image::make($mi->path());
            $img->fit(530, 630); // resize the fi to fit within 380x310 while preserving aspect ratio
            $img->encode('jpg', 80); // convert fi to JPEG format with 80% quality and reduce file size to 80kb
            $img->save(base_path('uploads/catalogs/') . $miName);
            $imagePath = $miName;
            $customDesign->image = $imagePath;
            $customDesign->save();
        }
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
            if ($request->hasFile('catalog_fronts')) {
                $fi = $request->fileile('catalog_fronts')[$key];
                $fiName = time() . '.' . $fi->extension();
                $img = Image::make($fi->path());
                $img->fit(530, 630); // resize the fi to fit within 380x310 while preserving aspect ratio
                $img->encode('jpg', 80); // convert fi to JPEG format with 80% quality and reduce file size to 80kb
                $img->save(base_path('uploads/catalogs/fronts/') . $fiName);
                $fiPath = $fiName;
                $catalog->front_image = $fiPath;
            }

            if ($request->hasFile('catalog_backs')) {

                $bi = $request->fileile('catalog_backs')[$key];
                $biName = time() . '.' . $bi->extension();
                $img = Image::make($bi->path());
                $img->fit(530, 630); // resize the fi to fit within 380x310 while preserving aspect ratio
                $img->encode('jpg', 80); // convert fi to JPEG format with 80% quality and reduce file size to 80kb
                $img->save(base_path('uploads/catalogs/backs/') . $biName);
                $biPath = $biName;
                $catalog->front_image = $biPath;

            }
            $catalog->save();
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
        $customDesign->delete();
        return back()->with('success', 'Custom Design deleted successfully');

    }
    public function Active(CustomDesign $customDesign)
    {

        $customDesign->status = '1';
        if ($customDesign->save()) {
            return back()->with('success', 'Custom Design Activated successfully.');
        } else {
            return back()->with('error', 'Custom Design Activation Unsuccessfull');
        }
    }

    public function Inactive(CustomDesign $customDesign)
    {
        // dd($customDesign->status);
        $customDesign->status = '0';
        if ($customDesign->save()) {
            return back()->with('success', 'Custom Design Deactivated successfully.');
        } else {
            return back()->with('error', 'Custom Design Dactivation Unsuccessfull.');
        }
    }

}