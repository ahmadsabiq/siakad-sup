<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

    // ------------------- Academics -------------------
    // Display academics page
    public function indexAcademics()
    {
        return view('dashboard.academics.academic-calendar.index');
    }

    // ------------------- Curriculum -------------------
    // Display curriculum page
    public function indexCurriculum()
    {
        return view('dashboard.academics.curriculum.index');
    }
}
