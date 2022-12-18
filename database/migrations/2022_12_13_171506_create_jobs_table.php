<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('employer');
            $table->unsignedBigInteger('employee');
            $table->unsignedBigInteger('project_id');

            $table->integer('rating');
            $table->string('review', 500);

            $table->foreign('employer')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('employee')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('project_id')->references('id')->on('projects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
};
