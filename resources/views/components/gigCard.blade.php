<div class="col-lg-4 col-md-6 portfolio-item filter-gig courses">
    <div class="course-item">
        <img src={{$projImg}} class="img-fluid" alt="...">
        <div class="course-content">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <x-tagMenu>
                    <x-tag title={{$category}}></x-tag>
                </x-tagMenu>
                <p class="price">{{$price}}</p>
            </div>

            <h3><a href="course-details.html">{{$title}}</a></h3>
            <p>{{$desc}}</p>
            <div class="trainer d-flex justify-content-between align-items-center">
                <div class="trainer-profile d-flex align-items-center">
                    <img src={{$freelancerImg}} class="img-fluid" alt="">
                    <span>{{$freelancer}}</span>
                </div>
                <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-click"></i>&nbsp;{{$clicks}}
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i>&nbsp;{{$saves}}
                </div>

            </div>
        </div>

    </div>
</div>