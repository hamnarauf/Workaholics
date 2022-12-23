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
        Schema::table('jobs', function (Blueprint $table) {
            $table->string('rating')->nullable()->change();
            $table->string('review')->nullable()->change();
            $table->unsignedBigInteger('project_id')->nullable()->change();
            $table->unsignedBigInteger('gig_id')->nullable();
      
            $table->foreign('gig_id')->references('id')->on('gigs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jobs', function (Blueprint $table) {
            $table->dropColumn('gig_id');
        });
    }
};
