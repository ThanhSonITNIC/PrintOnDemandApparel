<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\OrderProduct;

/**
 * Class OrderProductTransformer.
 *
 * @package namespace App\Transformers;
 */
class OrderProductTransformer extends TransformerAbstract
{
    /**
     * Transform the OrderProduct entity.
     *
     * @param \App\Entities\OrderProduct $model
     *
     * @return array
     */
    public function transform(OrderProduct $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
