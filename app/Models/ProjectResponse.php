<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectResponse extends Model
{
    use HasFactory;

    protected $fillable = [ 'project_id','file'];

    public function project(){

        return $this->belongsTo(Project::class);
    }
}
