<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DormitoryController extends Controller
{
    // Display room allocation
    public function indexRoomAllocation()
    {
        // $dormitories = Dormitory::all();
        // return view('dashboard.dormitory.room-allocation.index', compact('dormitories'));

        return view('dashboard.dormitory.room-allocation.index');
    }

    // create room allocation
    public function createRoomAllocation()
    {
        // $students = Student::all();
        // $rooms = Room::all();
        // return view('dashboard.dormitory.room-allocation.create', compact('students', 'rooms'));

        return view('dashboard.dormitory.room-allocation.create');
    }

    // Allocate rooms for students
    public function allocateRoom(Request $request)
    {
        $request->validate([
            'student_id' => 'required',
            'room_id' => 'required',
        ]);
        // Logic to allocate room
        return redirect()->back()->with('success', 'Room allocated successfully.');
    }

    // Display lesson schedule for dormitory
    public function indexLessonSchedule()
    {
        // $schedules = DormitorySchedule::all();
        // return view('dashboard.dormitory.lesson-schedule.index', compact('schedules'));

        return view('dashboard.dormitory.lesson-schedule.index');
    }

    // Show form to add a new schedule
    public function createLessonSchedule()
    {
        return view('dashboard.dormitory.lesson-schedule.create');
    }
}
