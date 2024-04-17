<?php

namespace App\Http\Controllers;

use App\Models\categorie;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = categorie::all();

        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $validateData = $request->validate([
        'name' => [
            'required',
            'regex:/^[a-zA-Z\s]+$/',
            'unique:categories,name',
        ],
       ]);

       $existingCategory = categorie::where('name' , $validateData['name'])->first();
       if($existingCategory){
        return redirect()->back()->with('error', 'Category with the same name already exists!');
       }

       $category = new categorie();
       $category->name = $validateData['name'];
       $category->save();

       session()->flash('success', 'Category created successfully.');
       return redirect()->route('category.index');

    }

    /**
     * Display the specified resource.
     */
    // public function show(categorie $categorie)
    // {
       //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $category = categorie::findOrFail($id);
        return view('admin.category.edite', compact('category'));
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category = categorie::findOrFail($id);
        $category->update($validatedData);
    
        return redirect()->route('category.index')->with('success', 'Category updated successfully!');

        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $category = categorie::findOrFail($id);
        $category->delete();
        return redirect()->route('category.index')->with('success' ,'category has ben deleted successfully');
    }
}
