<x-layout>
        <section class="single-block-wrapper section-padding">
    <div class="row mt-5 m-5">
        <div class="card">
            <div class="card-body">
                <h4 class="h4 mb-4">Develop Web Appliation | Proposals</h4>
                <div class="active-member">
                            <div class="table-responsive">
                                <table class="table table-xs mb-0">
                                    <thead>
                                        <tr>
                                            <th>Freelancer</th>
                                            <th>Bid</th>
                                            <th>Expected Date</th>
                                            <th>Proposals</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($proposals as $proposal )    
                                        <tr>
                                            <td>{{ $proposal->user->name }}</td>
                                            <td>{{ $proposal->bid }}</td>
                                            <td>{{ $proposal->expected_by }}</td>
                                            <td>{{ $proposal->proposal }}</td>
                                            <td>
                                                <input class="btn btn-primary px-2 py-1" type="submit"
                                                    name="submit-contact" id="submit_contact" value="View">
                                                <input class="btn btn-primary px-2 py-1" type="submit"
                                                    name="submit-contact" id="submit_contact" value="Accept">
                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
    </x-layout>        
