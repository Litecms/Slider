    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#details" data-toggle="tab">  {!! trans('slider::slider.name') !!}</a></li>
            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-success btn-sm" data-action='NEW' data-load-to='#slider-slider-entry' data-href='{{guard_url('slider/slider/create')}}'><i class="fa fa-plus-circle"></i> {{ trans('app.new') }}</button>
                @if($slider->id )
                <button type="button" class="btn btn-primary btn-sm" data-action="EDIT" data-load-to='#slider-slider-entry' data-href='{{ guard_url('slider/slider') }}/{{$slider->getRouteKey()}}/edit'><i class="fa fa-pencil-square"></i> {{ trans('app.edit') }}</button>
                <button type="button" class="btn btn-danger btn-sm" data-action="DELETE" data-load-to='#slider-slider-entry' data-datatable='#slider-slider-list' data-href='{{ guard_url('slider/slider') }}/{{$slider->getRouteKey()}}' >
                <i class="fa fa-times-circle"></i> {{ trans('app.delete') }}
                </button>
                @endif
            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('slider-slider-show')
        ->method('POST')
        ->files('true')
        ->action(guard_url('slider/slider'))!!}
            <div class="tab-content clearfix disabled">
                <div class="tab-pan-title"> {{ trans('app.view') }}   {!! trans('slider::slider.name') !!}  [{!! $slider->name !!}] </div>
                <div class="tab-pane active" id="details">
                    @include('slider::admin.slider.partial.entry', ['mode' => 'show'])
                </div>
            </div>
        {!! Form::close() !!}
    </div>