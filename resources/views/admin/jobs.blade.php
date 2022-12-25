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
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Jobs</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body ">
                                <h4 class="card-title d-inline">Jobs</h4>
                                <div class="row">
                                    @foreach ($jobs as $job)
                                    <div class="col-12 col-md-6 py-2 filter-job">
                                        <article class="card p-4">
                                                @if ($job['ptitle'] == "")
                                                <h3 class="h4 mb-3"><a class="post-title" href="">{{ $job['gtitle'] }}</a></h3>
                                                @else
                                                <h3 class="h4 mb-3"><a class="post-title" href="">{{ $job['ptitle'] }}</a></h3>
                                                @endif
                                                <ul class="card-meta list-inline">
                                                    <li class="list-inline-item">
                                                        <a href="author-single.html" class="card-meta-author">
                                                            <img src="{{ asset($job['cimg']) }}" alt="">
                                                            <span>{{ $job['cname'] }}</span>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="author-single.html" class="card-meta-author">
                                                            <img src="{{ asset($job['simg']) }}" alt="">
                                                            <span>{{ $job['sname'] }}</span>
                                                        </a>
                                                    </li><br>

                                                    <x-tagMenu>
                                                        @if ($job['pname'] == "")
                                                            <x-tag title="{{$job['gname']}}"></x-tag>
                                                        @else 
                                                            <x-tag title="{{$job['pname']}}"></x-tag>
                                                        @endif
                                                    </x-tagMenu>
                                                    <x-tagMenu>
                                                        <x-tag title="{{$job['status']}}"></x-tag>
                                                    </x-tagMenu>
                                                </ul>
                                                @if ($job['pname'] == "")
                                                    <p>{{$job['gdes']}}</p>
                                                @else 
                                                    <p>{{$job['pdes']}}</p>
                                                @endif
                                                <div class="mt-2">
                                                    <a class="btn btn-primary" href="/jobs/{{ $job['id'] }}">Details</a>
                                                    <a class="btn btn-primary" href="/admin/jobs/delete/{{ $job['id'] }}">Remove</a>
                                                </div>
                                            </div>
                                        </article>
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
