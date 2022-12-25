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
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Profiles</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title d-inline">Profiles</h4>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered mt-4">
                                    <thead>
                                        <tr>
                                            <th>User</th>
                                            <th>Joined</th>
                                            <th>Projects Posted</th>
                                            <th>Job Count</th>
                                            <th>Earnings</th>
                                            <th>Amount Spent</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($profiles as $profile)
                                        <tr>
                                            <td><a href="">{{$profile['name']}}</a></td>
                                            <td>{{$profile['created_at']}}</td>
                                            <td>{{$projs[$loop->index]}}</td>
                                            <td>{{$jobs[$loop->index]}}</td>
                                            <td>${{$earnings[$loop->index]}}</td>
                                            <td>${{$spendings[$loop->index]}}</td>
                                            <td>
                                                <a class="btn btn-primary p-1 px-2" href="/admin/profiles/delete/{{ $profile['id'] }}">Remove</a>
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
</x-admin-layout>
