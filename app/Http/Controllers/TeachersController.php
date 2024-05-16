<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeachersStoreRequest;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $teachers = Teacher::all();
        // $teachers = Teacher::where('name', "Firdavs")->get();
        // $teachers = Teacher::limit(10)->orderBy('name')->get();
        $teachers = Teacher::get();

        // dd($teachers);
        // return view('teachers', compact('teachers'));
        return view('teachers.index', ['teachers' => $teachers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TeachersStoreRequest $request)
    {
        // 1-usul
        // $teacher = new Teacher;
        // $teacher->name = $request->name;
        // $teacher->addres = $request->addres;
        // $teacher->phone = $request->phone;
        // $teacher->email = $request->email;
        // $teacher->save();
        //2-usul
        Teacher::create($request->all());
        return redirect()->route('teachers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher)
    {
        // $teacher = Teacher::findOrFail($id);
        return view('teachers.show', compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit($id)
    public function edit(Teacher $teacher)

    {
        // $teacher = Teacher::findOrFail($id);
        return view('teachers.edit', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->update($request->all());
        return redirect()->route('teachers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // 1-usul
        // $teacher = Teacher::findOrFail($id);
        // $teacher->delete();
        // 2-usul
        Teacher::destroy($id);
        return redirect()->route('teachers.index');
    }
}
