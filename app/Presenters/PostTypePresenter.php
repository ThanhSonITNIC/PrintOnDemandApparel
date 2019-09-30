<?php

namespace App\Presenters;

use App\Transformers\PostTypeTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class PostTypePresenter.
 *
 * @package namespace App\Presenters;
 */
class PostTypePresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new PostTypeTransformer();
    }
}
