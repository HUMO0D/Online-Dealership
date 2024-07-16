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
        Schema::create('add_cars', function (Blueprint $table) {
            $table->id();
            $table->string('carname');
            $table->string('img'); // Assuming 'img' will store the file path
            $table->integer('model');
            $table->string('dsc');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};