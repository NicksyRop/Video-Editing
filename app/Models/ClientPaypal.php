<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientPaypal extends Model
{
    use HasFactory;
    protected $fillable = [
        'paypal_id',
        'project_id',
        'amount',
        'user_id'
    ];
}
