<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\ProductType;

/**
 * Class ProductTypeTransformer.
 *
 * @package namespace App\Transformers;
 */
class ProductTypeTransformer extends TransformerAbstract
{
    /**
     * Transform the ProductType entity.
     *
     * @param \App\Entities\ProductType $model
     *
     * @return array
     */
    public function transform(ProductType $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
