<h3 class="mb-2">{{$name}}</h3>
<strong class="mb-2 d-block">{{$heading}}</strong>
<div class="content">
    <span><strong class="mb-2">Country: </strong></span>
    <span>{{$country}}</span>
</div>
<div class="content">
    <span><strong class="mb-2">Languages: </strong></span>
    @foreach($langs as $lang)
    <span>{{$lang}} | </span>
    @endforeach
</div>
<div class="content">
    <span><strong class="mb-2">Hours per week: </strong></span>
    <span>{{$hoursPerWeek}}hr/week</span>
</div>