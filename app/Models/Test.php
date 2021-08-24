<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;

    protected $fillable = ['file','category','instructions','category_id'];


    public function category(){

        return $this->belongsTo(Category::class);
    }
}