<?php

namespace App\Presenters;

use App\Transformers\OrderLogTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class OrderLogPresenter.
 *
 * @package namespace App\Presenters;
 */
class OrderLogPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new OrderLogTransformer();
    }
}
