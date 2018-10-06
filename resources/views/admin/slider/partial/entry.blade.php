            <div class='row'>
                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('name')
                       -> label(trans('slider::slider.label.name'))
                       -> placeholder(trans('slider::slider.placeholder.name'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('title1')
                       -> label(trans('slider::slider.label.title1'))
                       -> placeholder(trans('slider::slider.placeholder.title1'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('title2')
                       -> label(trans('slider::slider.label.title2'))
                       -> placeholder(trans('slider::slider.placeholder.title2'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::select('status')
                       -> options(trans('slider::slider.options.status'))
                       -> placeholder(trans('slider::slider.placeholder.status'))!!}
                </div>


                 <div class='col-md-12 col-sm-12'>
                    <div class="form-group">
                        <label for="images" class="control-label col-lg-12 col-sm-12 text-left">
                         {{trans('slider::slider.label.images') }}
                         </label>
                        <div class='col-lg-3 col-sm-12'>
                            {!! $slider->files('images', 10)
                            ->mime(config('filer.image_extensions'))
                            ->url($slider->getUploadUrl('images'))
                            ->dropzone()!!}
                        </div>
                        <div class='col-lg-7 col-sm-12'>
                            {!! $slider->files('images')
                             ->editor()!!}
                        </div>
                    </div>
                </div>
            </div>