<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class OrderLog.
 *
 * @package namespace App\Entities;
 */
class OrderLog extends Model implements Transformable
{
    use TransformableTrait;

    protected $table = 'order_logs';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['content', 'id_order'];

    public function order(){
        return $this->belongsTo('App\Entities\Order', 'id_order');
    }

    public function user(){
        return $this->belongsTo('App\Entities\User', 'id_user');
    }

}
