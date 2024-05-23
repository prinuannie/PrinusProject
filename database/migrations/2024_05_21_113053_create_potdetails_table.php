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
        Schema::create('PotDetails', function (Blueprint $table) {
            $table->id();
            $table->string('pot_name');
            $table->string('pot_type');
            $table->integer('pot_number');
            $table->string('pot_category');
            $table->date('pot_manufacture_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('potdetails');
    }
};
