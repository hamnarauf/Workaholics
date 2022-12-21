<x-layout>
    <section class="single-block-wrapper section-padding">
        <x-sectionTitle title="Proposals" desc="Develop Web Application"></x-sectionTitle>
        <div class="row m-5 mt-0">
            <div class="card">
                <div class="card-body mt-0 pt-0">
                    <div class="active-member">
                        <div class="table-responsive">
                            <table class="table table-xs mb-0">
                                <thead>
                                    <tr>
                                        <th>Freelancer</th>
                                        <th>Bid</th>
                                        <th>Expected Date</th>
                                        <th>Status</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($proposals as $proposal )
                                    <tr>
                                        <td>{{ $proposal->user->name }}</td>
                                        <td>{{ $proposal->bid }}</td>
                                        <td>{{ $proposal->expected_by }}</td>
                                        <td>{{ $proposal->status }}</td>
                                        <td class="">
                                            <input class="btn btn-primary px-2 py-1" type="submit" name="submit-contact" id="submit_contact" value="View">
                                            <input class="btn btn-primary px-2 py-1" type="submit" name="submit-contact" id="submit_contact" value="Accept">
                                            <input class="btn btn-primary px-2 py-1" type="submit" name="submit-contact" id="submit_contact" value="Reject">
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