<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Post.
 *
 * @package namespace App\Entities;
 */
class Post extends Model implements Transformable
{
    use TransformableTrait;

    protected $table = 'posts';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id_author', 'title', 'description', 'content', 'image', 'status', 'highlight', 'id_type', 'tags'];

    public function type(){
        return $this->belongsTo('App\Entities\PostTypes', 'id_type');
    }

    public function author(){
        return $this->belongsTo('App\Entities\User', 'id_author');
    }
}
