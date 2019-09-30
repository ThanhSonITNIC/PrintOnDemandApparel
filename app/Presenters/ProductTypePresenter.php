<?php

namespace App\Presenters;

use App\Transformers\ProductTypeTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class ProductTypePresenter.
 *
 * @package namespace App\Presenters;
 */
class ProductTypePresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new ProductTypeTransformer();
    }
}
