            @include('slider::public.slider.partial.header')

            <section class="grid">
                <div class="container">
                    <div class="row">
                         <div class="col-md-9">
                            <div class="main-area parent-border list-item">
                                @foreach($sliders as $slider) 
                                    {!!Slider::getSlider($slider->slug)!!}
                                @endforeach
                            </div>
                            <div class="pagination text-center">
                            {{ $sliders->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </section> 