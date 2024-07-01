<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseReasonsTable extends Migration
{
    public function up()
    {
        Schema::create('course_reasons', function (Blueprint $table) {
            $table->id();
            $table->integer('client_id');
            $table->integer('garnishment')->nullable();
            $table->integer('repossession')->nullable();
            $table->integer('foreclosure')->nullable();
            $table->integer('lawsuit')->nullable();
            $table->integer('illness_disability')->nullable();
            $table->integer('divorce')->nullable();
            $table->integer('Job_Loss')->nullable();
            $table->integer('c_c_debt')->nullable();
            $table->integer('g_debt')->nullable();
            $table->integer('other')->nullable();
            $table->integer('f_c_occurred')->nullable();
            $table->integer('f_c_keep')->nullable();
            $table->date('f_c_sale')->nullable();
            $table->integer('gar_started')->nullable();
            $table->integer('ls_creditors')->nullable();
            $table->decimal('ls_amount', 20, 0)->nullable();
            $table->integer('ls_reason')->nullable();
            $table->timestamp('dated')->default(now());
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('course_reasons');
    }
}
