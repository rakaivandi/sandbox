<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class PropertyController extends Controller
{

    public function index()
    {
        $property = Property::all();
        return view ('dashboard.property')->with('property', $property);
    }


    public function create()
    {
        return view('property.create');
    }


    public function store(Request $request)
    {

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);

        // return $request->all();
        $input = $request->all();


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
            $input['image'] = $name;
        }

        Property::create($input);
        return redirect('dashboard/property')->with('flash_message', 'Property added !');
    }


    public function show($id)
    {
        $property = Property::where('id', $id)->first(); 
        // return $property;
        return view('property.show')->with('property', $property);
    }


    public function edit($id)
    {
        $property = Property::where('id', $id)->first(); 
        return view('property.edit')->with('property', $property);
    }


    public function update(Request $request)
    {
        // return $request->all();
        $property = Property::where('id', $request->id)->first();
        $validated = $request->validate([
            'name' => 'required',
            'type' => 'required',
            'image' => 'required',
            'description' => 'required',
            'category' => 'required',
            'price' => 'required',
            'location' => 'required',
        ]);
        $property->update($validated);
        return redirect('dashboard/property')->with('flash_message', 'Custmer Update !');
    }

    public function destroy($id)
    {
        Property::destroy($id);
        return redirect('dashboard/property')->with('flash_message', 'Property Deleted !');
    }
}
