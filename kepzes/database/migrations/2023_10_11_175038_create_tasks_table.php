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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('title', 50); //több paraméter is megadható, pl. max 50 karakteres string
            $table->longtext('description');
            $table->date('end_date');
            $table->boolean('status');
            $table->foreignId('user_id')->references('id')->on('users'); //külső kulcs, létre is hozza a mezőt
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
