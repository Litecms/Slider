<section class="single">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="area">
                                <div class="item">
                                    <div class="feature">
                                      <img class="img-responsive center-block" src="{!!url($slider->defaultImage('images' , 'xl'))!!}" alt="{{$slider->title1}}">
                                    </div>
                                    <div class="content">
                                        <h4>{{$slider['title1']}}</h4>
                                        <div class="metas mt-20 clearfix"> 
                                            <div class="date-time pull-right">
                                                <span> <img class="img-circle" src="{{@$slider->user->picture}}" alt=""></span>
                                                <span><a href="" class="text-black">by <span class="text-primary">{{@$slider->user->name}}</span></a></span>
                                                <span><i class="fa fa-calendar"> {{format_date($slider['created_at'])}}</i></span>
                                            </div>
                                        </div>
                                        <div class="divider"></div>
                                        <p>{{$slider['title2']}}</p>
                                    </div>
                                </div>
                            </div>    
                        </div>
                    </div>
                </div>
            </section>