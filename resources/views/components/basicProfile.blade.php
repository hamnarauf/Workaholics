<h3 class="mb-2">{{$name}}</h3>
<strong class="mb-2 d-block">{{$description}}</strong>
<div class="content">
    <span><strong class="mb-2">Country: </strong></span>
    <span>{{$country}}</span>
</div>
<div class="content">
    <span><strong class="mb-2">Skills: </strong></span>
        @foreach($skills as $skill)
            <span>{{$skill}} | </span>
        @endforeach
</div>
<div class="content">
    <span><strong class="mb-2">Posted Projects: </strong></span>
    <span>{{$projects_posted}}</span>
</div>
<div class="content">
    <span><strong class="mb-2">Job Count: </strong></span>
    <span>{{$job_count}}</span>
</div>