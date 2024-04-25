<?php

namespace App\Http\Controllers;

use App\Models\classroom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $TraningRoom = classroom::all();
        return view('admin.classroom.index',compact('TraningRoom'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {


        return view('admin.classroom.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validedata = $request->validate([

            'name' => 'required',
            'image' => 'required|file|max:2048',
            'description' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('images','public');
        }


        $room = new classroom;
        $room->image = $image ;
        $room->name = $validedata['name'];
        $room->description = $validedata['description'];
        $room->save();

        return redirect()->route('Traning_Room.index')->with('success' , 'Traning Room Was Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(classroom $classroom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $room = classroom::findOrFail($id);

        return view('admin.classroom.edit',compact('room'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $room = classroom::findOrFail($id);

        $validedata = $request->validate([
            'name' => 'required',
            'image' => 'nullable|max:2048',
            'description' => 'required',
        ]);
        

        if ($request->hasFile('image')) {
            if (File::exists(public_path($room->image))) {
                File::delete(public_path($room->image));
            }

            if ($request->hasFile('image')) {
                $image = $request->file('image')->store('images','public');
            }
    
            $room->image = $image;
        }


        $room->name = $validedata['name'];
        $room->description = $validedata['description'];
        $room->update();

        return redirect()->route('Traning_Room.index')->with('success' , 'Traning Room was updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        $room = classroom::findOrFail($id);

        $room->delete();

        return redirect()->route('Traning_Room.index')->with('success','Traning room was deleted successfully');
    }
}
