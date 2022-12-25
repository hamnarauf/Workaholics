<x-layout>
    <!--search overlay end-->
    <section class="single-block-wrapper section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 mb-5 mb-lg-0">
                    <article>
                        <h1 class="h2">{{ $project_name }}</h1>
                        <ul class="card-meta my-3 list-inline">
                            <li class="list-inline-item">
                                <a href="author-single.html" class="card-meta-author">
                                    <span>Freelancer: {{ $freelancer }}</span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <i class="ti-timer"></i>Bid: ${{ $proposal['bid'] }}
                            </li>
                            <li class="list-inline-item">
                                <i class="ti-calendar"></i>Expected by: {{ $proposal['deadline'] }}
                            </li>
                        </ul>
                        <div class="content">
                            <p>{{ $proposal['proposal'] }}</p>

                            <form action="/gigproposals" method="POST">
                                @csrf
                                {{ method_field('PUT') }}
                                <button @if ($proposal['status'] == 'Accepted') disabled @endif
                                    class="btn btn-primary mt-2" value='Accepted' type="submit" name="status"
                                    id="submit_contact">
                                    @if ($proposal['status'] == 'Accepted')
                                        Accepted
                                    @else
                                        Accept Proposal
                                    @endif
                                </button>
                                <input hidden type="number" name="id" value="{{ $proposal->id }}">
                            </form>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
</x-layout>
