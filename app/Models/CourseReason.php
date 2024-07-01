<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseReason extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'garnishment',
        'repossession',
        'foreclosure',
        'lawsuit',
        'illness_disability',
        'divorce',
        'Job_Loss',
        'c_c_debt',
        'g_debt',
        'other',
        'f_c_occurred',
        'f_c_keep',
        'f_c_sale',
        'gar_started',
        'ls_creditors',
        'ls_amount',
        'ls_reason',
        'dated',
    ];

    protected $dates = [
        'f_c_sale',
        'dated',
    ];

    // Optionally define relationships or additional methods here
}
