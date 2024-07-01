<?php

// database/migrations/xxxx_xx_xx_xxxxxx_create_cc_debt_structure_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateCcDebtStructureTable extends Migration
{
    public function up()
    {
        Schema::create('cc_debt_structure', function (Blueprint $table) {
            $table->increments('debt_id');
            $table->integer('household')->nullable();
            $table->decimal('cc_debt', 20, 0)->nullable();
            $table->decimal('sl_debt', 20, 0)->nullable();
            $table->decimal('med_debt', 20, 0)->nullable();
            $table->decimal('cl_debt', 20, 0)->nullable();
            $table->decimal('ul_debt', 20, 0)->nullable();
            $table->decimal('mort1_debt', 20, 0)->nullable();
            $table->decimal('tax_debt', 20, 0)->nullable();
            $table->decimal('mort2_debt', 20, 0)->nullable();
            $table->decimal('total_debt', 20, 2)->nullable();
            $table->timestamp('dated')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->integer('client_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('cc_debt_structure');
    }
}
