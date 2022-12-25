<x-admin-layout>
    <!--**********************************
            Content body start
        ***********************************-->
    <div>
        <div class="content-body">
            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Categories</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title d-inline">Categories</h4>
                                <a class="btn btn-primary float-right" href="/admin/categories/create">Add Category</a>

                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered mt-4">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Projects Posted</th>
                                                <th>Gigs Posted</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($categories as $cat)
                                            <tr>
                                                <td>{{$cat['name']}}</td>
                                                <td>{{$projs[$loop->index]}}</td>
                                                <td>{{$gigs[$loop->index]}}</td>
                                                <td>
                                                    <a class="btn btn-primary" href="/admin/categories/delete/{{ $cat['id'] }}">Remove</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
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
