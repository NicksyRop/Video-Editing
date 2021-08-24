<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Rate extends Model
{
    use HasFactory;

    protected $fillable = ['catgeory_id','level_id' ,'rate'];

  
}
