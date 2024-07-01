<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table = 'client_login';

    protected $primaryKey = 'client_id';

    public $timestamps = false; // If you want to use Laravel's created_at and updated_at

    protected $fillable = [
        'client_email',
        'client_password',
        'progress',
        'status',
        'left_at'
    ];
}
