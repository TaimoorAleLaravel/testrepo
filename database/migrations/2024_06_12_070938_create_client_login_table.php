<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientLoginTable extends Migration
{
    public function up()
    {
        Schema::create('client_login', function (Blueprint $table) {
            $table->id('client_id'); // This is the primary key
            $table->string('client_email', 50);
            $table->string('client_password');
            $table->decimal('progress', 50, 2)->nullable();
            $table->string('status', 20);
            $table->string('left_at', 500)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('client_login');
    }
}

