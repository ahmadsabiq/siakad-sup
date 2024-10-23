<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    // Display student attendance
    public function indexStudentAttendance()
    {
        // $attendances = Attendance::where('type', 'student')->get();
        // return view('attendance.students.index', compact('attendances'));

        return view('dashboard.attendance.students.index');
    }

    // Display teacher attendance
    public function indexTeacherAttendance()
    {
        // $attendances = Attendance::where('type', 'teacher')->get();
        // return view('attendance.teachers.index', compact('attendances'));

        return view('dashboard.attendance.teachers.index');
    }

    // Display staff attendance
    public function indexStaffAttendance()
    {
        // $attendances = Attendance::where('type', 'staff')->get();
        // return view('attendance.staff.index', compact('attendances'));

        return view('dashboard.attendance.staffs.index');
    }

    // show notificatiion
    public function showNotification()
    {
        return view('dashboard.attendance.notifications.index');
    }
}
