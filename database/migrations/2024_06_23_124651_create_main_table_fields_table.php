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
        Schema::create('main_table_fields', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('main_table_id');
            $table->string('name');
            $table->string('type');
            $table->integer('order');
            $table->timestamps();

            $table->foreign('main_table_id')->references('id')->on('main_tables')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('main_table_fields');
    }
};
