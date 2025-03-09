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
        Schema::create('student_admissions', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
   
            $table->string('phone');
            $table->foreignId('student_id')->constrained()->onDelete('cascade');
            $table->decimal('admission_fee', 13, 2);
            $table->string('course');
            $table->string('status')->nullable();
            $table->timestamp('deleted_at')->nullable();
           
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_admissions');
    }
};
