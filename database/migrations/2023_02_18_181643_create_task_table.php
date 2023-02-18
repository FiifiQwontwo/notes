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
        Schema::create('task', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("Description");
            $table->date("start_date");
            $table->dateTime("end_date");
            $table->bigInteger('task_categories_id')->unsigned()->index()->nullable();
            $table->foreign("task_categories_id")->references('id')->on('task_categories')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('task');
    }
};
