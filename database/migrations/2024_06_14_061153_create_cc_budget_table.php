<?php

// database/migrations/xxxx_xx_xx_xxxxxx_create_cc_budget_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCcBudgetTable extends Migration
{
    public function up()
    {
        Schema::create('cc_budget', function (Blueprint $table) {
            $table->increments('cc_budget_id');
            $table->integer('client_id');
            $table->decimal('net_income', 50, 0)->nullable();
            $table->decimal('spouse_net_income', 50, 0)->nullable();
            $table->decimal('rent', 50, 0)->nullable();
            $table->decimal('condo', 50, 0)->nullable();
            $table->decimal('maintenance', 50, 0)->nullable();
            $table->decimal('pro_tax', 50, 0)->nullable();
            $table->decimal('housing_insurance', 50, 0)->nullable();
            $table->decimal('fur_app', 50, 0)->nullable();
            $table->decimal('doctor', 50, 0)->nullable();
            $table->decimal('dentist', 50, 0)->nullable();
            $table->decimal('medications', 50, 0)->nullable();
            $table->decimal('health_insurance', 50, 0)->nullable();
            $table->decimal('school_fee', 50, 0)->nullable();
            $table->decimal('books', 50, 0)->nullable();
            $table->decimal('school_activities', 50, 0)->nullable();
            $table->decimal('gas', 50, 0)->nullable();
            $table->decimal('electricity', 50, 0)->nullable();
            $table->decimal('water', 50, 0)->nullable();
            $table->decimal('garbage', 50, 0)->nullable();
            $table->decimal('sewer', 50, 0)->nullable();
            $table->decimal('telephone', 50, 0)->nullable();
            $table->decimal('cell_phone', 50, 0)->nullable();
            $table->decimal('cable', 50, 0)->nullable();
            $table->decimal('internet', 50, 0)->nullable();
            $table->decimal('automobile', 50, 0)->nullable();
            $table->decimal('license', 50, 0)->nullable();
            $table->decimal('transport_insurance', 50, 0)->nullable();
            $table->decimal('transport_maintenance', 50, 0)->nullable();
            $table->decimal('gasoline', 50, 0)->nullable();
            $table->decimal('public_trans', 50, 0)->nullable();
            $table->decimal('parking_tolls', 50, 0)->nullable();
            $table->decimal('restaurent', 50, 0)->nullable();
            $table->decimal('gifts', 50, 0)->nullable();
            $table->decimal('newspaper', 50, 0)->nullable();
            $table->decimal('movies_concerts', 50, 0)->nullable();
            $table->decimal('vacations', 50, 0)->nullable();
            $table->decimal('hobbies', 50, 0)->nullable();
            $table->decimal('clothing', 50, 0)->nullable();
            $table->decimal('laundery', 50, 0)->nullable();
            $table->decimal('membership', 50, 0)->nullable();
            $table->decimal('donations', 50, 0)->nullable();
            $table->decimal('allowance', 50, 0)->nullable();
            $table->decimal('child_support', 50, 0)->nullable();
            $table->decimal('child_care', 50, 0)->nullable();
            $table->decimal('pets', 50, 0)->nullable();
            $table->decimal('cosmetics', 50, 0)->nullable();
            $table->decimal('haircuts', 50, 0)->nullable();
            $table->decimal('personal_other', 50, 0)->nullable();
            $table->decimal('std_loan', 50, 0)->nullable();
            $table->decimal('gas_card', 50, 0)->nullable();
            $table->decimal('ds_card', 50, 0)->nullable();
            $table->decimal('cc_1', 50, 0)->nullable();
            $table->decimal('cc_2', 50, 0)->nullable();
            $table->decimal('cc_3', 50, 0)->nullable();
            $table->decimal('cc_4', 50, 0)->nullable();
            $table->decimal('cc_5', 50, 0)->nullable();
            $table->decimal('cc_6', 50, 0)->nullable();
            $table->decimal('cc_7', 50, 0)->nullable();
            $table->decimal('l_cc_other', 50, 0)->nullable();
            $table->decimal('savings', 50, 2)->nullable();
            $table->decimal('s_i_401', 50, 0)->nullable();
            $table->decimal('stocks', 50, 0)->nullable();
            $table->decimal('mutual_funds', 50, 0)->nullable();
            $table->decimal('bonds', 50, 0)->nullable();
            $table->decimal('ira', 50, 0)->nullable();
            $table->decimal('s_i_other', 50, 0)->nullable();
            $table->decimal('groceries', 50, 2)->nullable();
            $table->decimal('total_income', 50, 2)->nullable();
            $table->decimal('total_expenses', 50, 2)->nullable();
            $table->decimal('annual_expenses', 50, 2)->nullable();
            $table->decimal('total_savings', 50, 2)->nullable();
            $table->decimal('gross_income', 50, 2)->nullable();
            $table->decimal('monthly_debt', 50, 2)->nullable();
            $table->decimal('monthly_gross_income', 50, 2)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cc_budget');
    }
}
