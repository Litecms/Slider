<?php

namespace Litecms\Slider\Repositories\Presenter;

use League\Fractal\TransformerAbstract;
use Hashids;

class SliderTransformer extends TransformerAbstract
{
    public function transform(\Litecms\Slider\Models\Slider $slider)
    {
        return [
            'id'                => $slider->getRouteKey(),
            'user_id'           => $slider->user_id,
            'user_type'         => $slider->user_type,
            'name'              => $slider->name,
            'heading'           => $slider->heading,
            'subheading'        => $slider->title2,
            'title3'            => $slider->title3,
            'slug'              => $slider->slug,
            'images'            => $slider->images,
            'status'            => $slider->status,
            'upload_folder'     => $slider->upload_folder,
            'created_at'        => $slider->created_at,
            'updated_at'        => $slider->updated_at,
            'deleted_at'        => $slider->deleted_at,
            'url'              => [
                'public' => trans_url('slider/'.$slider->getPublicKey()),
                'user'   => guard_url('slider/slider/'.$slider->getRouteKey()),
            ], 
            'status'            => trans('app.'.$slider->status),
            'created_at'        => format_date($slider->created_at),
            'updated_at'        => format_date($slider->updated_at),
        ];
    }
}