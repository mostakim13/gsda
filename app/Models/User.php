<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'image',
        'password',
        'phone',
        'linkedin',
        'facebook',
        'twitter',
        'is_admin',
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

    public function user_enrollments(){
        return $this->hasMany(UserEnrollment::class);
    }
    public function answers() {
        return $this->hasOne('App\Models\Answer');
      }

      public function topic() {
        return $this->belongsToMany('App\Models\Topic','topic_user')
          ->withPivot('amount','transaction_id','status')
          ->withTimestamps();
      }

      public function is_admin() {
        if (Auth::check()) {
          if (Auth::user()->role == 'A') {
            return true;
          }
          return false;
        }
        return false;
      }
}
