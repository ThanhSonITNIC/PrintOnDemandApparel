<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class PostType.
 *
 * @package namespace App\Entities;
 */
class PostType extends Model implements Transformable
{
    use TransformableTrait;

    protected $table = 'post_types';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

    public function posts(){
        return $this->hasMany('App\Entities\Post', 'id_type');
    }
}
