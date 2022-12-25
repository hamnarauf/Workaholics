<article class="card">
    <div class="row card-body">
        <div class="p-5 pb-0">
            <h3 class="h3"><a class="post-title" href="post-elements.html">{{$title}}</a></h3>
            <ul class="card-meta list-inline">

                <li class="list-inline-item">
                    @if ($personName != "")
                    <a href="" class="card-meta-author">
                        <img src={{$personImg}} alt="">
                        <span>{{$personName}}</span>
                    </a>
                    @else
                    <span>Assigned to none</span>
                    @endif
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

            <input type="button" class="btn btn-primary" value="Details">
        </div>
        {{$slot}}
    </div>
</article>