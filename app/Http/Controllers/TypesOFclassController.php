<?php

namespace App\Http\Controllers;

use App\Models\class_type;
use Illuminate\Http\Request;

class TypesOFclassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classes = class_type::all();
        return view('admin.classes.alltypes', compact('classes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('admin.classes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validedata = $request->validate([

            'name' => [
                'required',
                'regex:/^[a-zA-Z\s]+$/',
                'unique:class_types,name',
            ],
            'description' => 'nullable',

        ]);

        $existclasstype = class_type::where('name', $validedata['name'])->first();
        if($existclasstype){
            return redirect()->back()->with('error' , 'the name has ben tokken ');
        }

        $classType = new class_type();
        $classType->name = $validedata['name'];
        $classType->description = $validedata['description'];
        $classType->save();

        return redirect()->route('class_type.index');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(class_type $class_type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $classtype = class_type::findOrFail($id);

        return view('admin.classes.edit' , compact('classtype'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validedata = $request->validate([

            'name' => [
                'required',
                'regex:/^[a-zA-Z\s]+$/',
                'unique:class_types,name',
            ],
            'description' => 'nullable',

        ]);    

        $classtype = class_type::findOrFail($id);
        $classtype->update($validedata);

        return redirect()->route('class_type.index')->with('success','class type has updated successfully');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string  $id)
    {
        $classtype = class_type::findOrFail($id);
        $classtype->delete();
        return redirect()->route('class_type.index')->with('success' ,'class type has ben deleted successfully');
    }
}
