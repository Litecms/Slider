<?php

namespace Litecms\Slider\Repositories\Eloquent;

use Litecms\Slider\Interfaces\SliderRepositoryInterface;
use Litepie\Repository\Eloquent\BaseRepository;

class SliderRepository extends BaseRepository implements SliderRepositoryInterface
{


    public function boot()
    {
        $this->fieldSearchable = config('litecms.slider.slider.model.search');

    }

    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model()
    {
        return config('litecms.slider.slider.model.model');
    }
}
