<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientProfile extends Model
{
    use HasFactory;

    protected $table = 'client_profile'; // Specify the table name if it's different from the default naming convention

    protected $fillable = [
        'client_id',
        'profile_img',
        'district_id',
        'household',
        'account_type',
        'title',
        'fname',
        'mname',
        'lname',
        'name_suffix',
        'dob',
        'ss_num',
        'st_address',
        'ex_address',
        'urbanization',
        'city',
        'state',
        'zipcode',
        'phone',
        'hearing',
        'title2',
        'fname2',
        'mname2',
        'lname2',
        'name_suffix2',
        'dob2',
        'ss_num2',
        'st_address2',
        'ex_address2',
        'urbanization2',
        'city2',
        'state2',
        'zipcode2',
        'phone2',
        'hearing2',
        'pkg',
        'opt_pdf',
        'opt_phone',
        'opt_email',
        'opt_mailed',
        'opt_attorny_fax',
        'attorny',
        'attorny_code',
        'attorny_id',
        'total_payment',
        'payment_method',
        'payment_status',
        'invoice_id',
        'feedback',
        'dated',
        'month',
        'day',
        'year',
        'month2',
        'day2',
        'year2',
        'language',
        'payment_date',
        // Add other fields as needed
    ];

    // Define relationships if needed
    public function client()
{
    return $this->belongsTo(Client::class, 'client_id');
}
public function court()
{
    return $this->belongsTo(Court::class, 'district_id');
}

}
