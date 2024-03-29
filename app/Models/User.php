<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Traits\HasRoles;


class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable,HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'duty',
        'avatar',
        't_submitted',
        'p_submitted',
        'verified'

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function profile(){

      return  $this->hasOne(UserProfile::class);
    }

    public function test(){

        return $this->hasOne(UserTest::class);
    }

    public function projects(){

        return $this->hasMany(Project::class);
    }


    static function taskRate($time){

        $usercat = Auth::user()->profile->category_id;
        $userlev = Auth::user()->profile->level_id;



        $rate = Rate::where([

            ['category_id',$usercat],
            ['level_id',$userlev]

        ]

        )->first();

        $value = (($rate->rate) * $time) ;



        return $value;
    }

    public function rating(){

        return $this->hasMany(UserRating::class);
    }

    public function accounts(){

        return $this->hasOne(Account::class);
    }


}
