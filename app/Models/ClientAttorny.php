<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientAttorny extends Model
{
    use HasFactory;
    protected $table = 'client_attorny';
    protected $primaryKey = 'attorney_id';
    public $timestamps = false;

    protected $guarded = [];
}
