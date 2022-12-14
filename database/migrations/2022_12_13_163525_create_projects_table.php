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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('name');
            $table->string('description');
            $table->unsignedBigInteger('category');
            $table->integer('budget');
            $table->date('expected_by');
            $table->json('skills')->nullable();
            $table->unsignedBigInteger('created_by');

            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('category')->references('id')->on('categories');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
};
