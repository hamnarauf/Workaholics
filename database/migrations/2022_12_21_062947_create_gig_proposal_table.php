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
        Schema::create('gig_proposal', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('gig_id');
            $table->string('proposal', 800);
            $table->enum('status', ['Accepted', 'Pending', 'Rejected'])->default('Pending');
            $table->integer('bid');
            $table->date('deadline');
            $table->string('file');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gig_proposal');
    }
};
