<x-layout>
    <section class="single-block-wrapper section-padding">
        <x-sectionTitle title="Gig Proposals" desc="List of Proposals on your gigs"></x-sectionTitle>
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
                                        <td>{{ $proposal->deadline }}</td>
                                        <td>{{ $proposal->status }}</td>
                                        <td class="">
                                            <form action="/gigproposals" method="POST">
                                                @csrf
                                                {{ method_field('PUT') }}
                                                <button class="btn btn-primary px-2 py-1" type="submit" name="status" id="submit_contact" value="view">View</button>
      
                                                <button
                                                @if ($proposal->status == 'Accepted' || $proposal->status == 'Rejected')
                                                    hidden
                                                @endif
                                                class="btn btn-primary px-2 py-1" type="submit" name="status" id="submit_contact" value="Accepted">Accept</button>
                                                <button
                                                @if ($proposal->status == 'Accepted' || $proposal->status == 'Rejected')
                                                    hidden
                                                @endif
                                                class="btn btn-primary px-2 py-1" type="submit" name="status" id="submit_contact" value="Rejected">Reject</button>
                                                <input hidden type="number" name="id" value="{{ $proposal->id }}">
                                            </form>
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