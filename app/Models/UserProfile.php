<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;

   protected $fillable = ['bio','cv','kra','paypal_email','category_id','user_id','completed','country','doctype','doctype','back_image','front_image'];

    public function user(){

        return $this->belongsTo(User::class);

        
    }
}
