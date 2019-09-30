<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\OrderLog;

/**
 * Class OrderLogTransformer.
 *
 * @package namespace App\Transformers;
 */
class OrderLogTransformer extends TransformerAbstract
{
    /**
     * Transform the OrderLog entity.
     *
     * @param \App\Entities\OrderLog $model
     *
     * @return array
     */
    public function transform(OrderLog $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
