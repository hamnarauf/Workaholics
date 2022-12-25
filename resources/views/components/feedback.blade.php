@if ($hasfeedback != "true")
<div class="px-5 col-10 ">
    <div class="mb-5 border-top mt-4 pt-5">
        <div class="mb-5">
            <h3 class="d-inline mr-3">Feedback</h3>
        </div>
        <div class="media d-block mb-4 pb-4 row">
            <div class="media-body col">
                <p>No feedback given yet</p>
            </div>
        </div>
    </div>
</div>

@else
<div class="px-5 col-10 ">
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
    </div>
</div>

@endif