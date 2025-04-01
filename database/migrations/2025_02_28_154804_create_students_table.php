<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            //email is unique in table students
            $table->string('email')->unique();
            $table->string('phone');
            $table->date('dob');
            //college_id is linked to a foreign key of the college id  of the colleges table and if a college is deleted then all students related are deleted aswell
            $table->foreignId('college_id')->constrained('colleges')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
