<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinanceController extends Controller
{

    // ------------------- Tuition Fees -------------------
    // Display list of tuition payments
    public function indexTuitionFees()
    {
        // $payments = Payment::where('type', 'tuition')->get();
        // return view('finance.tuition-fees.index', compact('payments'));

        return view('dashboard.finance.tuition-fees.index');
    }

    // ------------------- Other Fees -------------------
    // Display other fee payments
    public function indexOtherFees()
    {
        // $payments = Payment::where('type', 'other')->get();
        // return view('finance.other-fees.index', compact('payments'));

        return view('dashboard.finance.other-fees.index');
    }
}
