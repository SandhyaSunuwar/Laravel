<?php
namespace App\Http\Controllers;
use App\Models\Student; // <-- 1. Yo import line mathi thapnu parxa
use Illuminate\Http\Request;
class StudentCrudController extends Controller
{/**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }/**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }
/**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:students',
            'course' => 'required',
        ]);

        Student::create($request->all());
        return redirect()->route('students.index')->with('success', 'Student added successfully.');
    }
/**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // (Optional: paxi chahie use garna saknuhunxa)
    }
/**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student) // Type hint as Student model
    {
        return view('students.edit', compact('student'));
    }
  /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student) // Type hint as Student model
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:students,email,' . $student->id,
            'course' => 'required',
        ]);

        $student->update($request->all());
        return redirect()->route('students.index')->with('success', 'Student updated successfully.');
    }
/**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student) // Type hint as Student model
    {
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted successfully.');
    }
}