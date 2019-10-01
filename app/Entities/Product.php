<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Product.
 *
 * @package namespace App\Entities;
 */
class Product extends Model implements Transformable
{
    use TransformableTrait;

    protected $table = 'products';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

    public function type(){
        return $this->hasMany('App\Entities\ProductType', 'id_type');
    }

    public function orders(){
        return $this->hasManyThrough('App\Entities\Order', 'App\Entities\OrderProduct', 'id_product', 'id_order');
    }

}
