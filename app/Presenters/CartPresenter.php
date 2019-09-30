<?php

namespace App\Presenters;

use App\Transformers\CartTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class CartPresenter.
 *
 * @package namespace App\Presenters;
 */
class CartPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new CartTransformer();
    }
}
