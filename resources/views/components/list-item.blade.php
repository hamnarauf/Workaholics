<article class="card mb-4">
    <div class="row card-body">
        <div class="p-5">
            <h3 class="h3 mb-5"><a class="post-title" href="post-elements.html">{{$title}}</a></h3>
            <ul class="card-meta list-inline">
                <li class="list-inline-item">
                    <a href="" class="card-meta-author">
                        <img src={{$personImg}} alt="">
                        <span>{{$personName}}</span>
                    </a>
                </li>
                <li class="list-inline-item">
                    <i class="ti-timer"></i>{{$price}}
                </li>
                <li class="list-inline-item">
                    <i class="ti-calendar"></i>{{$date}}
                </li>
            </ul>

            <x-tagMenu>
                @foreach($tags as $tag)
                <x-tag title={{$tag}}></x-tag>
                @endforeach
            </x-tagMenu>
            <p>{{$desc}}.</p>
        </div>

       {{$slot}}
    </div>
</article>