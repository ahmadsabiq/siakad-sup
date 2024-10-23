<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolController extends Controller
{

    // ------------------- Structure of School -------------------

    // Display structure of school
    public function indexStructure()
    {
        return view('dashboard.school.structure.index');
    }

    // ------------------- Teacher Data -------------------
    // Display list of teachers
    public function indexTeachers()
    {
        // $teachers = Teacher::all();
        // return view('school.teacher-data.index', compact('teachers'));

        return view('dashboard.school.teacher-data.index');
    }

    // Show form to add a new teacher
    public function createTeacher()
    {
        return view('dashboard.school.teacher-data.create');
    }

    /*
    // Save new teacher data
    public function storeTeacher(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'subject' => 'required',
        ]);
        Teacher::create($request->all());
        return redirect()->route('school.teachers.index')->with('success', 'Teacher added successfully.');
    }*/

    // ------------------- Staff Data -------------------
    // Display list of staff
    public function indexStaff()
    {
        // $staffs = Staff::all();
        // return view('school.staff-data.index', compact('staffs'));

        return view('dashboard.school.staff-data.index');
    }
}
