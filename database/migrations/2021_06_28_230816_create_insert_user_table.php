<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInsertUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_users', function (Blueprint $table) {
            $table->id();
            $table->integer('file_no')->nullable();
            $table->string('member_name')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('mailing_address')->nullable();
            $table->string('permanent_address')->nullable();
            $table->integer('phone_no_1')->nullable();
            $table->integer('phone_no_2')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('email')->unique()->nullable();
            $table->integer('national_id')->nullable();
            $table->string('profession')->nullable();
            $table->string('office_address')->nullable();
            $table->string('designation')->nullable();
            $table->string('nominee_name')->nullable();
            $table->string('relation_with_member')->nullable();
            $table->integer('building_no')->nullable();
            $table->integer('total_amount')->nullable();
            $table->integer('no_of_installment')->nullable();
            $table->date('installment_start_from')->nullable();
            $table->text('description')->nullable();
            $table->mediumText('member_image')->nullable();
            $table->mediumText('nominee_image')->nullable();
            $table->integer('booking_money')->nullable();
            $table->integer('down_payment')->nullable();
            $table->integer('car_parking')->nullable();
            $table->string('land_filling_1')->nullable();
            $table->string('land_filling_2')->nullable();
            $table->string('building_pilling')->nullable();
            $table->string('first_roof_casting')->nullable();
            $table->string('finishing_work')->nullable();
            $table->integer('after_handover_money')->nullable();
            $table->string('password')->nullable();
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->text('profile_photo_path')->nullable();
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
        Schema::dropIfExists('add_users');
    }
}

