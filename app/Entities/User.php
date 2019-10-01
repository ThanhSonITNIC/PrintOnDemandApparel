<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class User.
 *
 * @package namespace App\Entities;
 */
class User extends Model implements Authenticatable
{
    use TransformableTrait, Notifiable;

    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'tel', 'address', 'id_level', 'provider', 'id_provider'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function level(){
        return $this->belongTo('App\Entities\Level', 'id_level');
    }

    public function posts(){
        return $this->hasMany('App\Entities\Post', 'id_author');
    }

    public function cart(){
        return $this->hasMany('App\Entities\Cart', 'id_user');
    }

    public function orders(){
        return $this->hasMany('App\Entities\Order', 'id_user');
    }
}
