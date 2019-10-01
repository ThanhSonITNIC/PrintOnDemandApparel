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
    protected $fillable = ['id_user', 'id_product', 'quantity', 'color', 'size', 'image', 'note'];

    public function product(){
        return $this->belongsTo('App\Entities\Product', 'id_product');
    }

    public function user(){
        return $this->belongsTo('App\Entities\User', 'id_user');
    }

}
