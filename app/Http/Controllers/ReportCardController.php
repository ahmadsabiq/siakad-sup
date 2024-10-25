<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportCardController extends Controller
{
    // Display manual input form for report cards
    public function indexInputReport()
    {
        return view('dashboard.report-cards.manual-input.index');
    }

    // Display report card for a student
    public function indexReportCard()
    {
        // $reportCard = ReportCard::where('student_id', $student_id)->get();
        // return view('report-cards.index', compact('reportCard'));
        return view('dashboard.report-cards.index');
    }

    /*
      // Save manual input for report card
      public function storeManualInput(Request $request)
      {
          $request->validate([
              'student_id' => 'required',
              'subject' => 'required',
              'grade' => 'required',
          ]);
          ReportCard::create($request->all());
          return redirect()->back()->with('success', 'Report card data added successfully.');
      }
  
      // Download report card
      public function download($student_id)
      {
          $reportCard = ReportCard::where('student_id', $student_id)->get();
          // Implement logic for downloading report card PDF
          return response()->download('path/to/report-card.pdf');
      }
        */
}
