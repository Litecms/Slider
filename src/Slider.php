<?php

namespace Litecms\Slider;

use User;

class Slider
{
    /**
     * $slider object.
     */
    protected $slider;

    /**
     * Constructor.
     */
    public function __construct(\Litecms\Slider\Interfaces\SliderRepositoryInterface $slider)
    {
        $this->slider = $slider;
    }

    /**
     * Returns count of slider.
     *
     * @param array $filter
     *
     * @return int
     */
    public function count()
    {
        return 0;
    }

    /**
     * Make gadget View
     *
     * @param string $view
     *
     * @param int $count
     *
     * @return View
     */
    public function gadget($view = 'admin.slider.gadget', $count = 10)
    {

        if (User::hasRole('user')) {
            $this->slider->pushCriteria(new \Litepie\Litecms\Repositories\Criteria\SliderUserCriteria());
        }

        $slider = $this->slider->scopeQuery(function ($query) use ($count) {
            return $query->orderBy('id', 'DESC')->take($count);
        })->all();

        return view('slider::' . $view, compact('slider'))->render();
    }

    public function getSlider($slug, $view = '')
    {
        $slider = $this->slider->findBySlug($slug);

        if ($view == '') {
            if (!view()->exists('public.slider.' . $slug))
            {
                $view = 'public.slider.sliders';
            }
            else
            {
                $view = 'public.slider.' . $slug;
            }
        }
        return view('slider::' . $view, compact('slider'))->render();

    }

}
