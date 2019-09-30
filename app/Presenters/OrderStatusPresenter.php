<?php

namespace App\Presenters;

use App\Transformers\OrderStatusTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class OrderStatusPresenter.
 *
 * @package namespace App\Presenters;
 */
class OrderStatusPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new OrderStatusTransformer();
    }
}
