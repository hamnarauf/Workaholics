<div class="col-lg-4 col-md-6 py-2 filter-job">
    <article class="card">
        <div class="post-slider slider-sm">
            <img src={{$jobImg}} class="card-img-top img-fluid" alt="post-thumb">
        </div>
        <div class="card-body">
            <h3 class="h4 mb-3"><a class="post-title" href="post-details.html">{{$title}}</a></h3>
            <ul class="card-meta list-inline">
                <li class="list-inline-item">
                    <a href="author-single.html" class="card-meta-author">
                        <img src={{$clientImg}} alt={{$clientName}}>
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
            <p>{{$desc}}</p>
            <input class="btn btn-primary" type="submit" name="submit-contact" id="submit_contact" value="Details">

        </div>
    </article>

</div>