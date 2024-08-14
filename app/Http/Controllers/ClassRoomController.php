<?php

namespace App\Http\Controllers;

use App\Models\Students;
use App\Models\Teachers;
use App\Models\ClassRooms;
use Illuminate\Http\Request;

class ClassRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data = ClassRooms::get();

        return view('kelas.index' )->with(['data' => $data]);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        if ($request->ajax()) {
            // Mengambil data Teachers dan Students dengan relasi classrooms
            $teachers = Teachers::with('teacher_classroom')->get();
            $students = Students::with('student_classroom')->get();
            return response()->json(['teachers' => $teachers, 'students' => $students]);
        }
    
        // Mengambil data ClassRooms
        $classrooms = ClassRooms::all();
        $teachers = Teachers::with('teacher_classroom')->get();
        $students = Students::with('student_classroom')->get();
    
        return view('kelas.show')->with([
            'classrooms' => $classrooms,
            'teachers' => $teachers,
            'students' => $students
        ]);
    }
    
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
