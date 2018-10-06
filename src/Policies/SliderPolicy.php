<?php

namespace Litecms\Slider\Policies;

use Litepie\User\Contracts\UserPolicy;
use Litecms\Slider\Models\Slider;

class SliderPolicy
{

    /**
     * Determine if the given user can view the slider.
     *
     * @param UserPolicy $user
     * @param Slider $slider
     *
     * @return bool
     */
    public function view(UserPolicy $user, Slider $slider)
    {
        if ($user->canDo('slider.slider.view') && $user->isAdmin()) {
            return true;
        }

        return $slider->user_id == user_id() && $slider->user_type == user_type();
    }

    /**
     * Determine if the given user can create a slider.
     *
     * @param UserPolicy $user
     * @param Slider $slider
     *
     * @return bool
     */
    public function create(UserPolicy $user)
    {
        return  $user->canDo('slider.slider.create');
    }

    /**
     * Determine if the given user can update the given slider.
     *
     * @param UserPolicy $user
     * @param Slider $slider
     *
     * @return bool
     */
    public function update(UserPolicy $user, Slider $slider)
    {
        if ($user->canDo('slider.slider.edit') && $user->isAdmin()) {
            return true;
        }

        return $slider->user_id == user_id() && $slider->user_type == user_type();
    }

    /**
     * Determine if the given user can delete the given slider.
     *
     * @param UserPolicy $user
     * @param Slider $slider
     *
     * @return bool
     */
    public function destroy(UserPolicy $user, Slider $slider)
    {
        return $slider->user_id == user_id() && $slider->user_type == user_type();
    }

    /**
     * Determine if the given user can verify the given slider.
     *
     * @param UserPolicy $user
     * @param Slider $slider
     *
     * @return bool
     */
    public function verify(UserPolicy $user, Slider $slider)
    {
        if ($user->canDo('slider.slider.verify')) {
            return true;
        }

        return false;
    }

    /**
     * Determine if the given user can approve the given slider.
     *
     * @param UserPolicy $user
     * @param Slider $slider
     *
     * @return bool
     */
    public function approve(UserPolicy $user, Slider $slider)
    {
        if ($user->canDo('slider.slider.approve')) {
            return true;
        }

        return false;
    }

    /**
     * Determine if the user can perform a given action ve.
     *
     * @param [type] $user    [description]
     * @param [type] $ability [description]
     *
     * @return [type] [description]
     */
    public function before($user, $ability)
    {
        if ($user->isSuperuser()) {
            return true;
        }
    }
}
