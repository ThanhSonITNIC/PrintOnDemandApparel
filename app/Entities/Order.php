<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Order.
 *
 * @package namespace App\Entities;
 */
class Order extends Model implements Transformable
{
    use TransformableTrait;

    protected $table = 'orders';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id_user', 'id_status', 'total', 'paid'];

    public function logs(){
        return $this->hasMany('App\Entities\OrderLog', 'id_order');
    }

    public function status(){
        return $this->belongsTo('App\Entities\OrderStatus', 'id_status');
    }

    public function customer(){
        return $this->belongsTo('App\Entities\User', 'id_user');
    }

    public function products(){
        // return $this->belongsToMany('App\Entities\Product', 'App\Entities\OrderProduct', 'id_order', 'id_product');
        return $this->hasMany('App\Entities\OrderProduct', 'id_order');
    }

}
