<div class="card">
<div class="single-post card-body">
    <div class="post-header mb-3 text-center">
        <div class="meta-cat">
            <a class="post-category font-extra text-color text-uppercase font-sm letter-spacing-1" href="#">{{$category}}</a>
        </div>
        <h2 class="post-title mt-2"> {{$title}} </h2>
        <ul class="card-meta text-center justify-content-center mt-2">
            <li class="list-inline-item ">
                <i class="ti-calendar"></i> {{$datePosted}}
            </li>
            <li class="list-inline-item">
                <i class="ti-calendar"></i> {{$budget}}
            </li>
            <li class="list-inline-item">
                <i class="ti-timer"></i>{{$expectedTime}}
            </li>
        </ul>
    </div>
    <div class="post-body ">
        <div class="entry-content">
            <p> {{$desc}}</p>
        </div>
        <h3 class="mt-4 mb-4">Required Skills</h3>
        <x-tagMenu>

            @foreach ($skills as $skill)
                <x-tag title={{$skill}}></x-tag>
            @endforeach
        </x-tagMenu>
    </div>
</div>
</div>