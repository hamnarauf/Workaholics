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
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Projects</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body ">
                                <h4 class="card-title d-inline">Projects</h4>
                                <div class="row">
                                    @foreach($projs as $proj)
                                    <div class="col-md-6 ol-12 py-2 filter-job">
                                        <article class="card">
                                            <div class="p-4">
                                                <h3 class="h4 mb-3"><a class="post-title" href="">{{$proj['name']}}</a></h3>
                                                <ul class="card-meta list-inline">
                                                    <li class="list-inline-item">
                                                        <a href="author-single.html" class="card-meta-author">
                                                            <img src="{{asset($proj['img'])}}" alt="">
                                                            <span>{{$proj['uname']}}</span>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <i class="ti-timer"></i>${{$proj['budget']}}
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <i class="ti-calendar"></i>{{$proj['expected_by']}}
                                                    </li><br>
                                                    <x-tagMenu>
                                                        <x-tag title="{{$proj['category']}}"></x-tag>
                                                    </x-tagMenu>
                                                </ul>
                                                <p>{{$proj['description']}}</p>
                                                <div class="mt-2">
                                                    <a class="btn btn-primary" href="/projects/{{ $proj['id'] }}">Details</a>
                                                    <a class="btn btn-primary" href="/admin/projects/delete/{{ $proj['id'] }}">Remove</a>
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
