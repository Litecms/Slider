<?php

// Resource routes  for slider
Route::group(['prefix' => set_route_guard('web').'/slider'], function () {
    Route::resource('slider', 'SliderResourceController');
});

// Public  routes for slider
Route::get('slider/popular/{period?}', 'SliderPublicController@popular');
Route::get('sliders/', 'SliderPublicController@index');
Route::get('sliders/{slug?}', 'SliderPublicController@show');

