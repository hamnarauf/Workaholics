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
            <p>{{$desc}}</p>
            <a class="btn btn-primary mb-3" href="{{ url('/gigs/'.$id) }}">Details</a>
                <div class="trainer d-flex justify-content-between align-items-center">
                <div class="trainer-profile d-flex align-items-center">
                    <img src={{$freelancerImg}} class="img-fluid" alt="">
                    <span>{{$freelancer}}</span>
                </div>
                <div class="trainer-rank d-flex align-items-center">
                    <i class="ti-timer"></i>&nbsp;{{$clicks}}
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i>&nbsp;{{$saves}}
                </div>

            </div>
        </div>

    </div>
</div>