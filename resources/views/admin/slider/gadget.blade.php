@forelse($slider as $key => $val)
<div class="slider-gadget-box">
    <p>{!!@$val->name!!}</p>
    <p class="text-muted"><small><i class="ion ion-android-person"></i> {!!@$val->user->name!!} at {!! format_date($val->created_at)!!}</small></p>
</div>
@empty
<div class="slider-gadget-box">
    <p>No Slider</p>
</div>
@endif