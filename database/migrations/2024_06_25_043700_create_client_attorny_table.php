<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientAttornyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_attorny', function (Blueprint $table) {
            $table->increments('attorney_id');
            $table->text('att_firm_name');
            $table->text('att_title')->nullable();
            $table->text('att_fname');
            $table->string('password', 20)->default('123456');
            $table->text('att_mname')->nullable();
            $table->text('att_lname');
            $table->text('att_name_suffix')->nullable();
            $table->string('att_email', 50);
            $table->string('att_phone', 255);
            $table->string('att_fax', 20)->nullable();
            $table->timestamp('dated')->useCurrent()->useCurrentOnUpdate();
            $table->engine = 'MyISAM';
            $table->charset = 'latin1';
            $table->collation = 'latin1_swedish_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client_attorny');
    }
}
