<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class StudentController extends Controller
{
    // Show the registration form view
    public function create()
    {
        return view('student-form');
    }

// Process and validate the submitted form data
    public function store(Request $request)
    {
        // Validate input fields
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'course' => 'required|string',
        ]);
        // Pass validated data to the success view
        return view('student-success', ['data' => $validatedData]);
    }
}
