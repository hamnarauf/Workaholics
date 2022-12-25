<?php
    if(strlen($desc) > 180)
    {
        $desc = substr($desc, 0, 135);
        $desc = $desc."...";
    }
?>

<div class="col-lg-4 col-md-6 py-2 filter-job">
    <article class="card">
        <div class="post-slider slider-sm">
            <img src="https://source.unsplash.com/random/600x400?{{$category}}" class="card-img-top img-fluid" alt="post-thumb">
        </div>
        <div class="card-body">
            <h3 class="h4 mb-3"><a class="post-title" href="{{ url("/projects/". $id ) }}">{{$title}}</a></h3>
            <ul class="card-meta list-inline">
                <li class="list-inline-item">
                    <a href="author-single.html" class="card-meta-author">
                        <span>{{$clientName}}</span>
                    </a>
                </li>
                <li class="list-inline-item">
                    <i class="ti-timer"></i>{{$price}}
                </li>
                <li class="list-inline-item">
                    <i class="ti-calendar"></i>{{$date}}
                </li>
                <x-tagMenu>
                    <x-tag title={{$category}}></x-tag>
                </x-tagMenu>
                </li>
            </ul>
            <div class="desc-para">
                <p class="">{{$desc}}</p>
            </div>
            <a class="btn btn-primary mt-2" href="{{ url("/projects/". $id ) }}">Details</a>
        </div>
    </article>

</div>