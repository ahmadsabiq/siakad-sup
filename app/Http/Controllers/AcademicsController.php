<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcademicsController extends Controller
{

    // ------------------- Curriculum -------------------
    // Display curriculum page
    public function indexCurriculum()
    {
        // $curriculum = Curriculum::all();
        // return view('academics.curriculum.index', compact('curriculum'));

        return view('dashboard.academics.curriculum.index');
    }

    // Show form to add a new curriculum
    public function createCurriculum()
    {
        return view('dashboard.academics.curriculum.create');
    }

    // ------------------- Class Allocation -------------------
    // Display class allocation page
    public function indexClasses()
    {
        // $classes = Classroom::all();
        // return view('academics.class-allocation.index', compact('classes'));

        return view('dashboard.academics.class-allocation.index');
    }

    // Show form to allocate a class
    public function createClass()
    {
        return view('dashboard.academics.class-allocation.create');
    }

    // ------------------- Lesson Schedule -------------------
    // Display lesson schedules
    public function indexSchedules()
    {
        // $schedules = Schedule::all();
        // return view('dashboard.academics.lesson-schedule.index', compact('schedules'));

        return view('dashboard.academics.lesson-schedule.index');
    }

    // Show form to add a new schedule
    public function createSchedule()
    {
        return view('dashboard.academics.lesson-schedule.create');
    }

    /*

    // Save new schedule
    public function storeSchedule(Request $request)
    {
        $request->validate([
            'class_id' => 'required',
            'subject' => 'required',
            'time' => 'required',
        ]);
        Schedule::create($request->all());
        return redirect()->route('academics.schedules.index')->with('success', 'Schedule added successfully.');
    }

    */

    // ------------------- Academic Calendar -------------------
    // Display academic calendar
    public function indexCalendar()
    {
        // $calendar = Calendar::all();
        // return view('academics.academic-calendar.index', compact('calendar'));

        return view('dashboard.academics.academic-calendar.index');
    }

    // Show form to add a new event
    public function createEvent()
    {
        return view('dashboard.academics.academic-calendar.create');
    }

    // ------------------- Syllabus -------------------
    // Display syllabus page
    public function indexSyllabus()
    {
        // $syllabus = Syllabus::all();
        // return view('academics.syllabus.index', compact('syllabus'));

        return view('dashboard.academics.syllabus.index');
    }

    // Show form to add a new syllabus
    public function createSyllabus()
    {
        return view('dashboard.academics.syllabus.create');
    }
}
