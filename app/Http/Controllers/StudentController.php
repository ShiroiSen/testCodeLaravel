<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // $data = Students::all();
        // return view('read')->with([
        //     'data' => $data
        // ]);

        return view('murid');   
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
        // $data['name'] = $request->name;
        // Students::insert($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $data = Students::findOrFail($id);
        // return view('edit')->with([
        //     'data' => $data
        // ]);
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
        // $data = Students::findOrFail($id);
        // $data->name = $request->name;
        // $data->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // $data = Students::findOrFail($id);
        // $data->delete();
    }
}
