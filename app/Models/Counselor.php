<?php
// app/Models/Counselor.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Counselor extends Model
{
    use HasFactory;

    protected $table = 'counselor_login';
    protected $primaryKey = 'counselor_id';
    public $timestamps = false;

    protected $fillable = [
        'counselor_name',
        'counselor_email',
        'counselor_password',
        // 'client_id',
        'counselor_signature',
    ];
}
