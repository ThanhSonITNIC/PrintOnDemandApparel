<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\Level;

/**
 * Class LevelTransformer.
 *
 * @package namespace App\Transformers;
 */
class LevelTransformer extends TransformerAbstract
{
    /**
     * Transform the Level entity.
     *
     * @param \App\Entities\Level $model
     *
     * @return array
     */
    public function transform(Level $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
