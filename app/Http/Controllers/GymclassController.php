<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\classroom;
use App\Models\Gym_class;
use App\Models\class_type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GymclassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    


        $classes = Gym_class::where('users_id', Auth::id())->get();
        $class_room = classroom::all();
        return view('coach.classes.index', compact('classes','class_room'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $classroom = classroom::all();
        $class_type = class_type::all();
        return view('coach.classes.create', compact('class_type','classroom'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedata = $request->validate([
            'title' => 'required',
            'date' => 'required|after:yesterday',
            'startTime' => 'required|',
            'endTime' => 'required|after:startTime',
            'description' => 'required',
            'class_types_id' => 'required',
            'class_room_id' => 'required',
            'Capacity' => 'required|integer|min:4|max:25',
        ]);


        $existingClass = Gym_class::where('class_room_id', $validatedata['class_room_id'])
            ->where('date', $validatedata['date'])
            ->where('endTime', '<=', now()->format('H:i:s'))
            ->exists();

    
        if ($existingClass) {
            return redirect()->back()->with('error', 'Another class is already scheduled in the same class room at the same time.');
        }

        $class = new Gym_class();

        $class->title = $validatedata['title'];
        $class->date = $validatedata['date'];
        $class->startTime = $validatedata['startTime'];
        $class->endTime = $validatedata['endTime'];
        $class->description = $validatedata['description'];
        $class->Capacity = $validatedata['Capacity'];
        $class->users_id = Auth::id();
        $class->class_types_id = $validatedata['class_types_id'];
        $class->class_room_id = $validatedata['class_room_id'];


        $class->save();


        return redirect()->route('class.index')->with('success' ,'class has ben created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $class = Gym_class::findOrFail($id);
        $class_type = class_type::all();
        $classroom = classroom::all();

        return view('coach.classes.edit', compact('class','class_type','classroom'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $class = Gym_class::findOrFail($id);
        $validatedata = $request->validate([
            'title' => 'required',
            'date' => 'required|after:yesterday',
            'startTime' => 'required',
            'endTime' => 'required|after:startTime',
            'description' => 'required',
            'class_types_id' => 'required',
            'class_room_id' => 'required',
            'Capacity' => 'required|integer|min:4|max:25',
            
            
        ]);

           
        
        $existingClass = Gym_class::where('class_room_id', $validatedata['class_room_id'])
            ->where('date', $validatedata['date'])
            ->where('endTime', '<=', now()->format('H:i:s'))
            ->exists();
    
        if ($existingClass) {
            return redirect()->back()->with('error', 'Another class is already scheduled in the same class room at the same time.');
        }



        $class->title = $validatedata['title'];
        $class->date = $validatedata['date'];
        $class->startTime = $validatedata['startTime'];
        $class->endTime = $validatedata['endTime'];
        $class->description = $validatedata['description'];
        $class->Capacity = $validatedata['Capacity'];
        $class->class_types_id = $validatedata['class_types_id'];
        $class->class_room_id = $validatedata['class_room_id'];


        $class->save();


        return redirect()->route('class.index')->with('success' ,'class has ben updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $class = Gym_class::findOrFail($id);

        $class->delete();

        return redirect()->route('class.index')->with('success' ,'class has ben deleted successfully');
    }
}
