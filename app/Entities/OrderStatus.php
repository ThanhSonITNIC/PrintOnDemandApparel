<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class OrderStatus.
 *
 * @package namespace App\Entities;
 */
class OrderStatus extends Model implements Transformable
{
    use TransformableTrait;

    protected $table = 'order_statuses';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

    public function orders(){
        return $this->hasMany('App\Entities\Order', 'id_status');
    }

}
