<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class OrderProduct.
 *
 * @package namespace App\Entities;
 */
class OrderProduct extends Model implements Transformable
{
    use TransformableTrait;

    protected $table = 'order_products';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id_order', 'id_product', 'price', 'quantity', 'color', 'size', 'image', 'note'];

    public function product(){
        return $this->belongTo('App\Entities\Product', 'id_product');
    }

    public function order(){
        return $this->belongTo('App\Entities\Order', 'id_order');
    }

}
