            <div class='row'>
                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('name')
                       -> label(trans('slider::slider.label.name'))
                       -> placeholder(trans('slider::slider.placeholder.name'))!!}
                </div>
                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('slug')
                       -> label(trans('slider::slider.label.slug'))
                       -> placeholder(trans('slider::slider.placeholder.slug'))!!}
                </div>
              </div>
              <div class='row'>
                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('heading')
                       -> label(trans('slider::slider.label.heading'))
                       -> placeholder(trans('slider::slider.placeholder.heading'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('subheading')
                       -> label(trans('slider::slider.label.subheading'))
                       -> placeholder(trans('slider::slider.placeholder.subheading'))!!}
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
                        <div class='col-lg-12 col-sm-12'>
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