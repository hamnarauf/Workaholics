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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('img');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password', 255);
            $table->rememberToken();
            $table->timestamps();

            # address fields
            $table->string('street_address');
            $table->string('zip')->nullable();
            $table->string('state')->nullable();
            $table->string('country');
            
            # financial fields
            $table->bigInteger('wallet')->default(0);

            # skills
            $table->json('skills')->nullable();

            # others
            $table->string('company')->nullable();
            $table->string('mobileNo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
