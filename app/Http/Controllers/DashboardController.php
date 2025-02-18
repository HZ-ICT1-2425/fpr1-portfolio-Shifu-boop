<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function index()
    {
        $courses = Course::all();

        $totalCredits = Course::whereNotNull('grade')
            ->where('grade', '>=', 5.5)
            ->sum('credits');

        return view('dashboard', compact('courses', 'totalCredits'));
    }


    public function update(Request $request, Course $course)
    {
        $request->validate([
            'grade' => 'nullable|string',
            'status' => 'required|string',
        ]);

        $course->update([
            'grade' => $request->grade,
            'status' => $request->status,
        ]);

        return back()->with('success', 'Course updated successfully.');
    }
}
