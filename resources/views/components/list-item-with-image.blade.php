<article class="card mb-4">
    <div class="row card-body">
        <div class="col-md-4 mb-4 mb-md-0">
            <div class="post-slider slider-sm">
                <img src="https://source.unsplash.com/random/600x600?technology" class="card-img" alt="post-thumb" style="height:200px; object-fit: cover;">
            </div>
        </div>
        <div class="col-md-8">
            <h3 class="h4"><a class="post-title" href="">{{$title}}</a></h3>
            <ul class="card-meta list-inline">
                <li>
                    <x-tagMenu>
                        @foreach($tags as $tag)
                        @if(empty($tag))
                        <p></p>
                        @else
                        <x-tag title={{$tag}}></x-tag>
                        @endif
                        @endforeach
                    </x-tagMenu>
                </li>
                @if( $personImg!="")
                <li class="list-inline-item">
                    <a href="" class="card-meta-author">
                        <img src={{$personImg}} alt="">
                        <span>{{$personName}}</span>
                    </a>
                </li>
                @endif
                <li class="list-inline-item">
                    <i class="ti-timer"></i>{{$price}}
                </li>
                <li class="list-inline-item">
                    <i class="ti-calendar"></i>{{$date}}
                </li>
            </ul>
            <p>{{$desc}}.</p>
            <input type="button" class="btn btn-primary" value="Details">
        </div>
    </div>
</article>