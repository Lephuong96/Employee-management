<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('employee_id');
            $table->string('group_employees');
            $table->string('name',50);
            $table->string('gender')->nullable();
            $table->char('phone_number')->nullable();
            $table->date('birthday')->nullable();
            $table->bigInteger('card_number');
            $table->string('email')->nullable();
            $table->string('address');
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
        Schema::dropIfExists('staffs');
    }
}
