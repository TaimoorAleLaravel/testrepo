<?php
// app/Models/Budget.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    protected $table = 'cc_budget';

    protected $primaryKey = 'cc_budget_id';

    protected $fillable = [
        'client_id',
        'net_income',
        'spouse_net_income',
        'rent',
        'condo',
        'maintenance',
        'pro_tax',
        'housing_insurance',
        'fur_app',
        'doctor',
        'dentist',
        'medications',
        'health_insurance',
        'school_fee',
        'books',
        'school_activities',
        'gas',
        'electricity',
        'water',
        'garbage',
        'sewer',
        'telephone',
        'cell_phone',
        'cable',
        'internet',
        'automobile',
        'license',
        'transport_insurance',
        'transport_maintenance',
        'gasoline',
        'public_trans',
        'parking_tolls',
        'restaurent',
        'gifts',
        'newspaper',
        'movies_concerts',
        'vacations',
        'hobbies',
        'clothing',
        'laundery',
        'membership',
        'donations',
        'allowance',
        'child_support',
        'child_care',
        'pets',
        'cosmetics',
        'haircuts',
        'personal_other',
        'std_loan',
        'gas_card',
        'ds_card',
        'cc_1',
        'cc_2',
        'cc_3',
        'cc_4',
        'cc_5',
        'cc_6',
        'cc_7',
        'l_cc_other',
        'savings',
        's_i_401',
        'stocks',
        'mutual_funds',
        'bonds',
        'ira',
        's_i_other',
        'groceries',
        'total_income',
        'total_expenses',
        'annual_expenses',
        'total_savings',
        'gross_income',
        'monthly_debt',
        'monthly_gross_income',
    ];

    public $timestamps = false;
}
