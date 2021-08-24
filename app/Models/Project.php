<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [ 'category_id','title','instructions','file','level_id','client_id','user_id','taken','freelancer_id','amount','paid'];

    public function level(){

        return $this->hasOne(Level::class);
    }

    public function category(){

        return $this->belongsTo(Category::class);
    }

    public function client(){

        return $this->belongsTo(User::class);
    }

    public function response(){

        return $this->hasOne(ProjectResponse::class);
    }


}
