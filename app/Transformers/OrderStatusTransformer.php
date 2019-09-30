<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\OrderStatus;

/**
 * Class OrderStatusTransformer.
 *
 * @package namespace App\Transformers;
 */
class OrderStatusTransformer extends TransformerAbstract
{
    /**
     * Transform the OrderStatus entity.
     *
     * @param \App\Entities\OrderStatus $model
     *
     * @return array
     */
    public function transform(OrderStatus $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
