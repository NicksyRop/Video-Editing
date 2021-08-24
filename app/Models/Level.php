<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;

   protected $fillable = ['level','rating','commision','pay_per_minute'];

   public function level(){

    return $this->hasOne(Rate::class);
   }
}
