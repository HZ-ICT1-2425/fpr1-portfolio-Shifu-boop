<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('study_monitors', function (Blueprint $table) {
            $table->id();
            $table->string('quarter');
            $table->string('title'); // Course
            $table->string('test'); // Type of test
            $table->decimal('credits', 4, 2); // Credit
            $table->string('grade')->nullable(); // Grade
            $table->string('status')->default('Not Taken'); // Status
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('study_monitors');
    }
};
