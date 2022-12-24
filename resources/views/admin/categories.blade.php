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
                                <input class="btn btn-primary float-right" type="submit" name="submit-contact"
                                    id="submit_contact" value="Add Category">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered mt-4">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Image Source</th>
                                                <th>Projects Posted</th>
                                                <th>Gigs Posted</th>
                                                <th>Earnings</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>web devl</td>
                                                <td>img/assets/img.png</td>
                                                <td>3</td>
                                                <td>5</td>
                                                <td>$5</td>
                                                <td>
                                                    <input class="btn btn-primary" type="submit" name="submit-contact"
                                                        id="submit_contact" value="Edit">
                                                    <input class="btn btn-primary" type="submit" name="submit-contact"
                                                        id="submit_contact" value="Remove">
                                                </td>
                                            </tr>
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
