    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#slider" data-toggle="tab">{!! trans('slider::slider.tab.name') !!}</a></li>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-primary btn-sm" data-action='UPDATE' data-form='#slider-slider-edit'  data-load-to='#slider-slider-entry' data-datatable='#slider-slider-list'><i class="fa fa-floppy-o"></i> {{ trans('app.save') }}</button>
                <button type="button" class="btn btn-default btn-sm" data-action='CANCEL' data-load-to='#slider-slider-entry' data-href='{{guard_url('slider/slider')}}/{{$slider->getRouteKey()}}'><i class="fa fa-times-circle"></i> {{ trans('app.cancel') }}</button>

            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('slider-slider-edit')
        ->method('PUT')
        ->enctype('multipart/form-data')
        ->action(guard_url('slider/slider/'. $slider->getRouteKey()))!!}
        <div class="tab-content clearfix">
            <div class="tab-pane active" id="slider">
                <div class="tab-pan-title">  {{ trans('app.edit') }}  {!! trans('slider::slider.name') !!} [{!!$slider->name!!}] </div>
                @include('slider::admin.slider.partial.entry', ['mode' => 'edit'])
            </div>
        </div>
        {!!Form::close()!!}
    </div>