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
        Schema::create('gym_classes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('class_types_id')->constrained('class_types');
            $table->foreignId('users_id')->constrained('users');
            $table->foreignId('class_room_id')->constrained('classrooms');
            $table->string('title');
            $table->date('date');
            $table->time('startTime');
            $table->time('endTime');
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gym_classes');
    }
};
