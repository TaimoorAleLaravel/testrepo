<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientProfileTable extends Migration
{
    public function up()
    {
        Schema::create('client_profile', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('client_id')->on('client_login')->onDelete('cascade'); // Update to reference client_login table
            $table->string('profile_img', 100)->nullable();
            $table->unsignedInteger('district_id')->nullable();
            $table->unsignedInteger('household')->nullable();
            $table->char('account_type', 1)->nullable();
            $table->string('title')->nullable();
            $table->string('fname')->nullable();
            $table->string('mname')->nullable();
            $table->string('lname')->nullable();
            $table->string('name_suffix')->nullable();
            $table->date('dob')->nullable();
            $table->string('ss_num', 11)->nullable();
            $table->string('st_address')->nullable();
            $table->string('ex_address')->nullable();
            $table->string('urbanization')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zipcode', 10)->nullable();
            $table->string('phone', 20)->nullable();
            $table->char('hearing', 1)->nullable();
            $table->string('title2')->nullable();
            $table->string('fname2')->nullable();
            $table->string('mname2')->nullable();
            $table->string('lname2')->nullable();
            $table->string('name_suffix2')->nullable();
            $table->date('dob2')->nullable();
            $table->string('ss_num2', 11)->nullable();
            $table->string('st_address2')->nullable();
            $table->string('ex_address2')->nullable();
            $table->string('urbanization2')->nullable();
            $table->string('city2')->nullable();
            $table->string('state2')->nullable();
            $table->string('zipcode2', 10)->nullable();
            $table->string('phone2', 20)->nullable();
            $table->char('hearing2', 1)->nullable();
            $table->char('pkg', 1)->nullable();
            $table->char('opt_pdf', 1)->nullable();
            $table->char('opt_phone', 1)->nullable();
            $table->char('opt_email', 1)->nullable();
            $table->char('opt_mailed', 1)->nullable();
            $table->char('opt_attorney_fax', 1)->nullable();
            $table->char('attorney', 1)->nullable();
            $table->string('attorney_code', 30)->nullable();
            $table->string('english_lang')->nullable();
            $table->string('spanish_lang')->nullable();

            $table->unsignedInteger('attorney_id')->nullable();
            $table->char('total_payment')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('payment_status', 20)->default('unpaid');
            $table->string('invoice_id', 20)->nullable();
            $table->text('feedback')->nullable();
            $table->timestamp('dated')->useCurrent();
            $table->string('month', 2)->nullable();
            $table->string('day', 2)->nullable();
            $table->string('year', 4)->nullable();
            $table->string('month2', 2)->nullable();
            $table->string('day2', 2)->nullable();
            $table->string('year2', 4)->nullable();
            $table->char('language', 1)->nullable();
            $table->date('payment_date')->nullable();
            $table->decimal('course_progress')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('client_profile');
    }
}
