<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentAffairsController extends Controller
{
    // ------------------- Student Data -------------------

    // Display list of students
    public function indexStudents()
    {
        // $students = Student::all();
        // return view('student-affairs.student-data.index', compact('students'));

        return view('dashboard.student-affairs.student-data.index');
    }

    // ------------------- Registration -------------------
    // Show form to register a new student

    public function indexRegistration()
    {
        return view('dashboard.student-affairs.registration.index');
    }

    public function createStudent()
    {
        return view('dashboard.student-affairs.registration.create');
    }

    /*
    // Save new student data
    public function storeStudent(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'class' => 'required',
            'dob' => 'required|date',
        ]);
        Student::create($request->all());
        return redirect()->route('student-affairs.students.index')->with('success', 'Student registered successfully.');
    }
    */

    // ------------------- Parent Data -------------------

    //Display list of parents
    public function indexParents()
    {
        // $parents = Parent::all();
        // return view('student-affairs.parent-data.index', compact('parents'));

        return view('dashboard.student-affairs.parent-data.index');
    }

    /*
    // Show form to edit parent data
    public function editParent($id)
    {
        $parent = Parent::findOrFail($id);
        return view('student-affairs.parent-data.edit', compact('parent'));
    }

    // Update parent data
    public function updateParent(Request $request, $id)
    {
        $parent = Parent::findOrFail($id);
        $parent->update($request->all());
        return redirect()->route('student-affairs.parents.index')->with('success', 'Parent data updated successfully.');
    }
    */
}
