<?php

use Illuminate\Database\Seeder;
use App\Models\StudyMonitor;

class StudyMonitorSeeder extends Seeder
{
    public function run()
    {
        StudyMonitor::create([
            'quarter' => 'Q1',
            'title' => 'Programming Basics',
            'test' => 'Case Study Exam',
            'credits' => 5,
            'grade' => '-',
            'status' => 'Not Taken'
        ]);

        StudyMonitor::create([
            'quarter' => 'Q1',
            'title' => 'Computer Science Basics',
            'test' => 'Written Exam',
            'credits' => 5,
            'grade' => '-',
            'status' => 'Not Taken'
        ]);

        StudyMonitor::create([
            'quarter' => 'Q2',
            'title' => 'IT Personality Project',
            'test' => 'Portfolio',
            'credits' => 1.25,
            'grade' => '-',
            'status' => 'Not Taken'
        ]);
    }
}
