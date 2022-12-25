<?php
    if(strlen($desc) > 180)
    {
        $desc = substr($desc, 0, 135);
        $desc = $desc."...";
    }
?>

<div class="col-lg-4 col-md-6 portfolio-item filter-gig courses">
    <div class="course-item">
        <img src="https://source.unsplash.com/random/600x400?{{$category}}" class="img-fluid" alt="...">
        <div class="course-content">
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="h4"><a class="post-title" href="{{ url('/gigs/'.$id) }}">{{$title}}</a></h3>
                <p class="price">{{$price}}</p>
            </div>
            <x-tagMenu>
                <x-tag title={{$category}}></x-tag>
            </x-tagMenu>
            <div class="desc-para">
                <p class="">{{$desc}}</p>
            </div>
            <a class="btn btn-primary mb-3 mt-2" href="{{ url('/gigs/'.$id) }}">Details</a>
            <div class="trainer d-flex justify-content-between align-items-center">
                <div class="trainer-profile d-flex align-items-center">
                    @if ($freelancerImg!="")
                    <img src={{$freelancerImg}} class="img-fluid" alt="">
                    @else
                    <img src="data:image/png;base64,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" class="img-fluid" alt="">
                    @endif
                    
                    <a href=""><span>{{$freelancer}}</span></a>
                </div>
                <div class="trainer-rank d-flex align-items-center">
                    <i class="ti-timer"></i>&nbsp;{{$clicks}} days
                </div>
            </div>
        </div>

    </div>
</div>