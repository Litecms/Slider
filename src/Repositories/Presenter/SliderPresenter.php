<?php

namespace Litecms\Slider\Repositories\Presenter;

use Litepie\Repository\Presenter\FractalPresenter;

class SliderPresenter extends FractalPresenter {

    /**
     * Prepare data to present
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new SliderTransformer();
    }
}