<?php

namespace Litecms\Slider\Http\Controllers;

use App\Http\Controllers\ResourceController as BaseController;
use Form;
use Litecms\Slider\Http\Requests\SliderRequest;
use Litecms\Slider\Interfaces\SliderRepositoryInterface;
use Litecms\Slider\Models\Slider;

/**
 * Resource controller class for slider.
 */
class SliderResourceController extends BaseController
{

    /**
     * Initialize slider resource controller.
     *
     * @param type SliderRepositoryInterface $slider
     *
     * @return null
     */
    public function __construct(SliderRepositoryInterface $slider)
    {
        parent::__construct();
        $this->repository = $slider;
        $this->repository
            ->pushCriteria(\Litepie\Repository\Criteria\RequestCriteria::class)
            ->pushCriteria(\Litecms\Slider\Repositories\Criteria\SliderResourceCriteria::class);
    }

    /**
     * Display a list of slider.
     *
     * @return Response
     */
    public function index(SliderRequest $request)
    {
        $view = $this->response->theme->listView();

        if ($this->response->typeIs('json')) {
            $function = camel_case('get-' . $view);
            return $this->repository
                ->setPresenter(\Litecms\Slider\Repositories\Presenter\SliderPresenter::class)
                ->$function();
        }

        $sliders = $this->repository->paginate();

        return $this->response->setMetaTitle(trans('slider::slider.names'))
            ->view('slider::slider.index', true)
            ->data(compact('sliders'))
            ->output();
    }

    /**
     * Display slider.
     *
     * @param Request $request
     * @param Model   $slider
     *
     * @return Response
     */
    public function show(SliderRequest $request, Slider $slider)
    {

        if ($slider->exists) {
            $view = 'slider::slider.show';
        } else {
            $view = 'slider::slider.new';
        }

        return $this->response->setMetaTitle(trans('app.view') . ' ' . trans('slider::slider.name'))
            ->data(compact('slider'))
            ->view($view, true)
            ->output();
    }

    /**
     * Show the form for creating a new slider.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function create(SliderRequest $request)
    {

        $slider = $this->repository->newInstance([]);
        return $this->response->setMetaTitle(trans('app.new') . ' ' . trans('slider::slider.name')) 
            ->view('slider::slider.create', true) 
            ->data(compact('slider'))
            ->output();
    }

    /**
     * Create new slider.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store(SliderRequest $request)
    {
        try {
            $attributes              = $request->all();
            $attributes['user_id']   = user_id();
            $attributes['user_type'] = user_type();
            $slider                 = $this->repository->create($attributes);

            return $this->response->message(trans('messages.success.created', ['Module' => trans('slider::slider.name')]))
                ->code(204)
                ->status('success')
                ->url(guard_url('slider/slider/' . $slider->getRouteKey()))
                ->redirect();
        } catch (Exception $e) {
            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('/slider/slider'))
                ->redirect();
        }

    }

    /**
     * Show slider for editing.
     *
     * @param Request $request
     * @param Model   $slider
     *
     * @return Response
     */
    public function edit(SliderRequest $request, Slider $slider)
    {
        return $this->response->setMetaTitle(trans('app.edit') . ' ' . trans('slider::slider.name'))
            ->view('slider::slider.edit', true)
            ->data(compact('slider'))
            ->output();
    }

    /**
     * Update the slider.
     *
     * @param Request $request
     * @param Model   $slider
     *
     * @return Response
     */
    public function update(SliderRequest $request, Slider $slider)
    {
        try {
            $attributes = $request->all();

            $slider->update($attributes);
            return $this->response->message(trans('messages.success.updated', ['Module' => trans('slider::slider.name')]))
                ->code(204)
                ->status('success')
                ->url(guard_url('slider/slider/' . $slider->getRouteKey()))
                ->redirect();
        } catch (Exception $e) {
            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('slider/slider/' . $slider->getRouteKey()))
                ->redirect();
        }

    }

    /**
     * Remove the slider.
     *
     * @param Model   $slider
     *
     * @return Response
     */
    public function destroy(SliderRequest $request, Slider $slider)
    {
        try {

            $slider->delete();
            return $this->response->message(trans('messages.success.deleted', ['Module' => trans('slider::slider.name')]))
                ->code(202)
                ->status('success')
                ->url(guard_url('slider/slider/0'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('slider/slider/' . $slider->getRouteKey()))
                ->redirect();
        }

    }

    /**
     * Remove multiple slider.
     *
     * @param Model   $slider
     *
     * @return Response
     */
    public function delete(SliderRequest $request, $type)
    {
        try {
            $ids = hashids_decode($request->input('ids'));

            if ($type == 'purge') {
                $this->repository->purge($ids);
            } else {
                $this->repository->delete($ids);
            }

            return $this->response->message(trans('messages.success.deleted', ['Module' => trans('slider::slider.name')]))
                ->status("success")
                ->code(202)
                ->url(guard_url('slider/slider'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->status("error")
                ->code(400)
                ->url(guard_url('/slider/slider'))
                ->redirect();
        }

    }

    /**
     * Restore deleted sliders.
     *
     * @param Model   $slider
     *
     * @return Response
     */
    public function restore(SliderRequest $request)
    {
        try {
            $ids = hashids_decode($request->input('ids'));
            $this->repository->restore($ids);

            return $this->response->message(trans('messages.success.restore', ['Module' => trans('slider::slider.name')]))
                ->status("success")
                ->code(202)
                ->url(guard_url('/slider/slider'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->status("error")
                ->code(400)
                ->url(guard_url('/slider/slider/'))
                ->redirect();
        }

    }

}
