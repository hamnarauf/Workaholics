<div class="p-5 col-10">
    <div class="mb-5 border-top mt-4 pt-5">
        <div class="mb-5">
            <h3 class="d-inline mr-3">Feedback</h3>
            <div class="mx-3 d-inline ">
                @for ($i=0; $i<$stars; $i++) <x-star>
                    </x-star>
                @endfor 
            </div>
        </div>
        <div class="media d-block mb-4 pb-4 row">
            <div class="col-md-2">
                <img src={{$clientImg}} class="mr-3 rounded-circle" alt="" height="70" width="70">
            </div>
            <div class="media-body col">
                <a href="#!" class="h4 mb-2 d-inline">{{$clientName}}</a>
                <ul class="card-meta list-inline">
                    <li class="list-inline-item">
                        <i class="ti-calendar"></i>{{$clientDate}}
                    </li>
                    <li class="list-inline-item">
                        <i class="ti-timer"></i>{{$clientTime}}
                    </li>
                    <li class="list-inline-item">
                </ul>
                <p>{{$clientComment}}</p>
            </div>
        </div>
        <div class="media d-block row">
            <div class="mb-3 mb-md-0 col-md-3" href="#">
                <img class="mr-5" src="{{asset('img/arrow.png')}}" alt="">
                <img src={{$freelancerImg}} class="rounded-circle" alt="" height="70" width="70">
            </div>
            <div class="media-body col">
                <a href="#!" class="h4 mb-2 d-inline">{{$freelancerName}}</a>
                <ul class="card-meta list-inline">
                    <li class="list-inline-item">
                        <i class="ti-calendar"></i>{{$freelancerDate}}
                    </li>
                    <li class="list-inline-item">
                        <i class="ti-timer"></i>{{$freelancerTime}}
                    </li>
                    <li class="list-inline-item">
                </ul>
                <p>{{$freelancerComment}}</p>
            </div>
        </div>
    </div>
</div>