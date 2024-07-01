<?php

// database/migrations/xxxx_xx_xx_create_counselor_login_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCounselorLoginTable extends Migration
{
    public function up()
    {
        Schema::create('counselor_login', function (Blueprint $table) {
            $table->increments('counselor_id');
            $table->string('counselor_name', 100);
            $table->string('counselor_email', 100)->unique();
            $table->string('counselor_password');
            // $table->integer('client_id');
            $table->timestamp('dated')->useCurrent()->useCurrentOnUpdate();
            $table->string('counselor_signature', 255)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('counselor_login');
    }
}

