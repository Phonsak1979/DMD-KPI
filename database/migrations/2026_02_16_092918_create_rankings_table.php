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
        Schema::create('rankings', function (Blueprint $table) {
            $table->id();
            $table->string('r_main')->unique();
            $table->string('r_sub')->nullable()->unique();
            $table->string('title');
            $table->string('url')->nullable();
            $table->string('department_code');
            $table->string('target')->nullable();
            $table->string('result')->nullable();
            $table->string('target_value')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rankings');
    }
};
