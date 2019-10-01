<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Cart.
 *
 * @package namespace App\Entities;
 */
class Cart extends Model implements Transformable
{
    use TransformableTrait;

    protected $table = 'cart';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

    public function product(){
        return $this->belongTo('App\Entities\Product', 'id_product');
    }

    public function user(){
        return $this->belongTo('App\Entities\User', 'id_user');
    }

}
