
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
      @foreach($slider->getImages('images','lg') as $key=> $image)
      <div class="item {{$loop->first ? 'active' : ''}}">
        <img src="{!!url($slider->defaultImage('images' ,'original',$key))!!}" alt="...">
        <div class="carousel-caption">
          <h5>{{$slider->images[$key]['title']}}</h5>
          <p>{{$slider->images[$key]['caption']}}</p>
        </div>
      </div>
      @endforeach
  </div>

  <!-- Controls -->

  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
