<?php

namespace App\Presenters;

use App\Transformers\OrderProductTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class OrderProductPresenter.
 *
 * @package namespace App\Presenters;
 */
class OrderProductPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new OrderProductTransformer();
    }
}
