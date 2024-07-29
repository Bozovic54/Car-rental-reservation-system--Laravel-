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
        Schema::create('autos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('marka');
            $table->string('model');
        });
        
        Schema::create('rezervacijas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('ime');
            $table->string('prezime');
            $table->date('datum');
            $table->integer('broj_dana');
            $table->integer('status');
            $table->unsignedBigInteger('auto_id');
            $table->foreign('auto_id')->references('id')->on('autos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rezervacija');
        Schema::dropIfExists('autos');
        
    }
};
