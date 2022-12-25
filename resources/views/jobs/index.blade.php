<x-layout>
    <section class="container row m-auto">
        <x-sectionTitle title="Jobs" desc="All on going and completed jobs"></x-sectionTitle>
        <x-tabmenu>
            <x-tab title="Seller" class="active" sectionId="#filter-sellerJobs"></x-tab>
            <x-tab title="Buyer" class="" sectionId="#filter-buyerJobs"></x-tab>
        </x-tabmenu>
        <div class="tab-content">
            <div class=" tab-pane active show " id="filter-sellerJobs">
                <!-- for Seller -->
                @foreach ($sellers as $seller)
                <div class="col-md-6 col-sm-12">
                    <article class="card mb-4">
                        <div class="row card-body">
                            <div class="p-3">
                                <h3 class="h3  d-inline"><a class="post-title" href="post-elements.html">{{ $seller->project->name }}</a></h3>
                                <ul class="float-right d-inline">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                                            <span class="">
                                                <i class="bi bi-three-dots-vertical h3"></i> </span>
                                        </a><!-- End Profile Iamge Icon -->
                                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center" href="jobs/{{ $seller->project->id }}/submissions">
                                                    <i class="bi bi-gear"></i>
                                                    <span>Submissions</span>
                                                </a>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="card-meta list-inline">
                                    <li class="list-inline-item">
                                        <a href="" class="card-meta-author">
                                            <img src=img/clients/client-1.png alt="">
                                            <span>{{ $seller->employerd->name }} </span>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="ti-timer"></i>{{ $seller->project->budget }}
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="ti-calendar"></i>{{ $seller->project->expected_by }}
                                    </li>
                                </ul>
                                <ul class="list-inline widget-list-inline">
                                    <li class="list-inline-item"><a href="">{{ $seller->status }}</a></li>
                                </ul>
                                <p>Milestone: {{ $seller->milestonescount }}</p>
                                <div class="text-start d-inline">
                                    <a href="{{ url('/milestones/' . $seller->id) }}" class="btn btn-primary">
                                        Details
                                    </a>
                                </div>

                            </div>
                        </div>
                    </article>
                </div>
                @endforeach
            </div>
        <div class=" tab-pane" id="filter-buyerJobs">
            <!-- for SBuyers -->
            @foreach ($buyers as $buyer)
            <div class="col-md-6 col-sm-12">
                <article class="card mb-4">
                    <div class="row card-body">
                        <div class="p-3">
                            <h3 class="h3  d-inline"><a class="post-title" href="post-elements.html">{{ $buyer->project->name }}</a></h3>
                            <ul class="float-right d-inline">
                                <li class="nav-item dropdown">
                                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                                        <span class="">
                                            <i class="bi bi-three-dots-vertical h3"></i> </span>
                                    </a><!-- End Profile Iamge Icon -->
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center" href="jobs/{{ $buyer->project->id }}/submissions">
                                                <i class="bi bi-gear"></i>
                                                <span>Submissions</span>
                                            </a>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center" href="{{ url('/feedbacks/create') }}">
                                                <i class="bi bi-question-circle"></i>
                                                <span>Feedback</span>
                                            </a>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="card-meta list-inline">
                                <li class="list-inline-item">
                                    <a href="" class="card-meta-author">
                                        <img src=img/clients/client-1.png alt="">
                                        <span>{{ $buyer->employeed->name }} </span>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <i class="ti-timer"></i>{{ $buyer->project->budget }}
                                </li>
                                <li class="list-inline-item">
                                    <i class="ti-calendar"></i>{{ $buyer->project->expected_by }}
                                </li>
                            </ul>
                            <ul class="list-inline widget-list-inline">
                                <li class="list-inline-item"><a href="">{{ $buyer->status }}</a></li>
                            </ul>
                            <p>Milestone {{ $buyer->milestonescount }}</p>
                            <div class="text-start d-inline">
                                <a href="{{ url('/milestones/' . $buyer->id) }}" class="btn btn-primary">Details</a>
                            </div>

                        </div>
                    </div>
                </article>
            </div>
            @endforeach

        </div>
    </section>
</x-layout>