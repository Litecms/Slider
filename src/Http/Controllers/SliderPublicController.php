<?php

namespace Litecms\Slider\Http\Controllers;

use App\Http\Controllers\PublicController as BaseController;
use Litecms\Slider\Interfaces\SliderRepositoryInterface;

class SliderPublicController extends BaseController
{
    // use SliderWorkflow;

    /**
     * Constructor.
     *
     * @param type \Litecms\Slider\Interfaces\SliderRepositoryInterface $slider
     *
     * @return type
     */
    public function __construct(SliderRepositoryInterface $slider)
    {
        $this->repository = $slider;
        parent::__construct();
    }

    /**
     * Show slider's list.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function index()
    {
        $sliders = $this->repository
        ->pushCriteria(app('Litepie\Repository\Criteria\RequestCriteria'))
        ->scopeQuery(function($query){
            return $query->orderBy('id','DESC');
        })->paginate();


        return $this->response->setMetaTitle(trans('slider::slider.names'))
            ->view('slider::public.slider.index')
            ->data(compact('sliders'))
            ->output();
    }

    /**
     * Show slider's list based on a type.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function list($type = null)
    {
        $sliders = $this->repository
        ->pushCriteria(app('Litepie\Repository\Criteria\RequestCriteria'))
        ->scopeQuery(function($query){
            return $query->orderBy('id','DESC');
        })->paginate();


        return $this->response->setMetaTitle(trans('slider::slider.names'))
            ->view('slider::public.slider.index')
            ->data(compact('sliders'))
            ->output();
    }

    /**
     * Show slider.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function show($slug)
    {
        $slider = $this->repository->scopeQuery(function($query) use ($slug) {
            return $query->orderBy('id','DESC')
                         ->where('slug', $slug);
        })->first(['*']);

        return $this->response->setMetaTitle(trans('slider::slider.name'))
            ->view('slider::public.slider.show')
            ->data(compact('slider'))
            ->output();
    }

}
