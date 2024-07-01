<?php

// app/Models/DebtStructure.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DebtStructure extends Model
{
    protected $table = 'cc_debt_structure';

    protected $primaryKey = 'debt_id';

    protected $fillable = [
        'household',
        'cc_debt',
        'sl_debt',
        'med_debt',
        'cl_debt',
        'ul_debt',
        'mort1_debt',
        'tax_debt',
        'mort2_debt',
        'total_debt',
        'client_id',
    ];

    public $timestamps = false;
}
