<x-admin-layout>
    <!--**********************************
            Content body start
        ***********************************-->
    <div>
        <div class="content-body">
            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Update</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Gigs</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body ">
                                <h4 class="card-title d-inline ">Gigs</h4>
                                <div class="row mt-3">
                                    @foreach($gigs as $gig)
                                    <div class="col-12 col-md-6 portfolio-item filter-gig courses">
                                        <div class="course-item">
                                            <div class="course-content">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <h3><a href="">{{$gig['name']}}</a></h3>
                                                    <p class="price">${{$gig['budget']}}</p>
                                                </div>
                                                
                                                <x-tagMenu>
                                                    <x-tag title="{{$gig['category']}}"></x-tag>
                                                </x-tagMenu>
                                                <p>{{$gig['description']}}</p>
                                                <div class="mt-2">

                                                    <a class="btn btn-primary mb-3" href="/gigs/{{ $gig['id'] }}">Details</a>
                                                    <a class="btn btn-primary mb-3" href="/admin/gigs/delete/{{ $gig['id'] }}">Remove</a>
                                                </div>
                                                    <div class="trainer d-flex justify-content-between align-items-center">
                                                    <div class="trainer-profile d-flex align-items-center">
                                                        <img src="{{asset($gig['img'])}}" class="img-fluid" alt="">
                                                        <a href=""><span>{{$gig['uname']}}</span></a>
                                                    </div>                                    
                                                </div>
                                            </div>
                                    
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
    </div>
</x-admin-layout>
