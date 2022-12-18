<div class="single-post">
    <div class="post-header mb-5 text-center">
        <div class="meta-cat">
            <a class="post-category font-extra text-color text-uppercase font-sm letter-spacing-1" href="#">{{$category}}</a>
        </div>
        <h2 class="post-title mt-2"> {{$title}} </h2>
        <div class="post-meta">
            <span class="text-uppercase font-sm letter-spacing-1">{{$datePosted}}</span>
            <span class="text-uppercase font-sm letter-spacing-1 px-5">{{$budget}}</span>
            <span class="text-uppercase font-sm letter-spacing-1">{{$expectedTime}}</span>
        </div>
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