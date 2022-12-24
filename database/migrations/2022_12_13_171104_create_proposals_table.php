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
        Schema::create('proposals', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('created_by');

            $table->unsignedBigInteger('project_id');
            $table->string('proposal', 800);
            $table->date('expected_by');
            $table->integer('bid');
            $table->string('file');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('proposals');
    }
};
