            @include('slider::public.slider.partial.header')

            <section class="grid">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            @include('slider::public.slider.partial.aside')
                        </div>
                        <div class="col-md-9 ">
                            <div class="main-area parent-border list-item">
                                @foreach($sliders as $slider)
                                <div class="item border">
                                    <div class="feature">
                                        <a href="{{trans_url('sliders')}}/{{@$slider['slug']}}">
                                            <img src="{{url($slider->defaultImage('images'))}}" class="img-responsive center-block" alt="">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4><a href="{{trans_url('slider')}}/{{$slider['slug']}}">{{str_limit($slider['title1'], 300)}}</a> 
                                        </h4>
                                        <div class="metas mt20">
                                            <div class="tag pull-left">
                                                <a href="#" class="">{{@$slider->title2}}</a>
                                            </div>
                                            <div class="date-time pull-right">
                                                <span><i class="fa fa-comments"></i>{{@$slider->viewcount}}</span>
                                                <span><i class="fa fa-calendar"></i>{{format_date($slider['posted_on'])}}</span>
                                            </div>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="author">
                                            <div class="avatar pull-left">
                                                {{@$slider->user->badge}}
                                            </div>
                                            <div class="actions">
                                                

                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                @endforeach
                            </div>
                            <div class="pagination text-center">
                            {{ $sliders->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </section> 