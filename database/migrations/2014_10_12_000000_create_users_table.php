<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
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
            $table->string('firstname')->nullable();
            $table->string('middlename')->nullable();
            $table->string('surname')->nullable();
            $table->string('mobilenumber')->nullable();
            $table->string('dob')->nullable();
            $table->string('gender')->nullable();
            $table->string('address')->nullable();
            $table->string('nationality')->nullable();
            $table->string('state')->nullable();
            $table->string('lga')->nullable();
            $table->string('profile')->nullable();
            $table->string('admission_type')->nullable();
            $table->string('guardian_firstname')->nullable();
            $table->string('guardian_middlename')->nullable();
            $table->string('guardian_surname')->nullable();
            $table->string('guardian_email')->nullable();
            $table->string('guardian_mobile')->nullable();
            $table->string('guardian_contact')->nullable();
            $table->string('guardian_gender')->nullable();
            $table->string('jamb_no')->nullable();
            $table->string('jamb_year')->nullable();
            $table->string('jamb_sub1')->nullable();
            $table->string('jamb_sub2')->nullable();
            $table->string('jamb_sub3')->nullable();
            $table->string('jamb_sub4')->nullable();
            $table->string('jamb_sub1score')->nullable();
            $table->string('jamb_sub2score')->nullable();
            $table->string('jamb_sub3score')->nullable();
            $table->string('jamb_sub4score')->nullable();
            $table->boolean('is_hotel')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
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
}
