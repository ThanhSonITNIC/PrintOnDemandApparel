<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\PostType;

/**
 * Class PostTypeTransformer.
 *
 * @package namespace App\Transformers;
 */
class PostTypeTransformer extends TransformerAbstract
{
    /**
     * Transform the PostType entity.
     *
     * @param \App\Entities\PostType $model
     *
     * @return array
     */
    public function transform(PostType $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
