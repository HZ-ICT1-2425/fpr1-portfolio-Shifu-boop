<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    public function run()
    {
        // Empty the table first
        DB::table('courses')->truncate();

        $courses = [
            // Quarter 1
            ['quarter' => 'Q1', 'title' => 'Program- & Career Orientation', 'exam' => 'Presentation (individual)', 'credits' => 2.5, 'grade' => null, 'status' => 'Not-Taken'],
            ['quarter' => 'Q1', 'title' => 'Computer Science Basics', 'exam' => 'Written knowledge test', 'credits' => 5, 'grade' => null, 'status' => 'Not-Taken'],
            ['quarter' => 'Q1', 'title' => 'Programming Basics', 'exam' => 'Case study exam', 'credits' => 5, 'grade' => null, 'status' => 'Not-Taken'],
            ['quarter' => 'Q1', 'title' => 'Object-Oriented Programming', 'exam' => 'Presentation (group), Written knowledge test', 'credits' => 10, 'grade' => null, 'status' => 'Not-Taken'],
            ['quarter' => 'Q1', 'title' => 'Framework Project 2', 'exam' => 'Presentation (group), Portfolio, Portfolio', 'credits' => 10, 'grade' => null, 'status' => 'Not-Taken'],

            // Quarter 2
            ['quarter' => 'Q2', 'title' => 'IT Personality Projectweek 1', 'exam' => 'Portfolio', 'credits' => 1.25, 'grade' => null, 'status' => 'Not-Taken'],

            // Quarter 3
            ['quarter' => 'Q3', 'title' => 'IT Personality International week', 'exam' => 'Portfolio', 'credits' => 1.25, 'grade' => null, 'status' => 'Not-Taken'],
            ['quarter' => 'Q3', 'title' => 'IT Personality 1', 'exam' => 'Portfolio', 'credits' => 1.25, 'grade' => null, 'status' => 'Not-Taken'],
            ['quarter' => 'Q3', 'title' => 'IT Personality 2', 'exam' => 'Portfolio', 'credits' => 1.25, 'grade' => null, 'status' => 'Not-Taken'],

            // Quarter 4
            ['quarter' => 'Q4', 'title' => 'Personal Professional Development Exploration', 'exam' => 'Criterion-referenced assessment', 'credits' => 12.5, 'grade' => null, 'status' => 'Not-Taken'],
            ['quarter' => 'Q4', 'title' => 'Framework Project 1', 'exam' => 'Written knowledge test, Written knowledge test, Presentation (group), Portfolio', 'credits' => 10, 'grade' => null, 'status' => 'Not-Taken'],
            ['quarter' => 'Q4', 'title' => 'Business IT Consultancy Basics', 'exam' => 'Assignment (individual)', 'credits' => 2.5, 'grade' => null, 'status' => 'Not-Taken'],
        ];

        foreach ($courses as $course) {
            Course::create($course);
        }
    }
}
