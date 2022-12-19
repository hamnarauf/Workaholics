<article class="card mb-3">
    <div class="row card-body">
        <div class="col">
            <h3 class="h4 mb-3 post-title">{{$heading}}</h3>
            <p>{{$desc}}</p>
            <ul class="card-meta list-inline">
                <li class="list-inline-item">
                    <i class="ti-calendar"></i> Date: {{$date}}
                </li>
                <li class="list-inline-item">
                    <i class="ti-calendar"></i> Location: {{$location}}
                </li>
                <x-tagMenu>
                    @foreach ($tags as $tag)
                    <x-tag title={{$tag}}></x-tag>
                    @endforeach
                </x-tagMenu>
            </ul>

        </div>
    </div>
</article>