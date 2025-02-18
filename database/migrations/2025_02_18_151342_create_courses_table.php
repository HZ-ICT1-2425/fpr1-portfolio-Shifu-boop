<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('quarter'); // Quarter (Q1, Q2, etc.)
            $table->string('title'); // Course Title
            $table->string('exam'); // Exam Type
            $table->decimal('credits', 4, 2); // Number of credits
            $table->string('grade')->nullable(); // Grade (nullable because not all courses are graded yet)
            $table->string('status')->default('Not-Taken'); // Default status
            $table->timestamps(); // Created_at & updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('courses');
    }
};
