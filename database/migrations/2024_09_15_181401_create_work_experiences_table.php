<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('work_experiences', function (Blueprint $table) {
            $table->id();
            $table->dateTime('start_date');
            $table->dateTime('end_date')->nullable();
            $table->string('role');
            $table->string('company');
            $table->string('website');
            $table->text('description');
            $table->json('tags')->nullable();
            $table->timestamps(); //
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('work_experiences');
    }
};
