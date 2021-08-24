<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRating extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','comment','rate','freelancer_id','project_id'];


public function rate(){

    return $this->belongsTo(User::class);
}

}
