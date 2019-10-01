<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class ProductType.
 *
 * @package namespace App\Entities;
 */
class ProductType extends Model implements Transformable
{
    use TransformableTrait;

    protected $table = 'product_types';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

    public function products(){
        return $this->hasMany('App\Entities\Product', 'id_type');
    }

}
