<x-layout>
    <section class="container row m-auto">
        <x-sectionTitle title="Jobs" desc="All on going and completed jobs"></x-sectionTitle>
        <x-tabmenu>
            <x-tab title="Seller" class="active" sectionId="#filter-sellerJobs"></x-tab>
            <x-tab title="Buyer" class="" sectionId="#filter-buyerJobs"></x-tab>
        </x-tabmenu>
        <div class="tab-content">
            <div class=" tab-pane active fade in tab-pane" id="filter-sellerJobs">
                <!-- for seller -->
                <div class="col-md-6 col-sm-12">
                    <article class="card mb-4">
                        <div class="row card-body">
                            <div class="p-3">
                                <h3 class="h3  d-inline"><a class="post-title" href="post-elements.html">Web development</a></h3>
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
                                                <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                                    <i class="bi bi-gear"></i>
                                                    <span>Submissions</span>
                                                </a>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
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
                                            <span>client Name </span>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="ti-timer"></i>$123445
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="ti-calendar"></i>Due: 23 July 2022
                                    </li>
                                </ul>
                                <ul class="list-inline widget-list-inline">
                                    <li class="list-inline-item"><a href="">Completed</a></li>
                                </ul>
                                <p>Milestone 1</p>
                                <div class="text-start d-inline">
                                    <input class="btn btn-primary" type="submit" name="submit-contact" id="submit_contact" value="Details">
                                    <input class="btn btn-primary" type="submit" name="submit-contact" id="submit_contact" value="Submit">
                                </div>

                            </div>
                        </div>
                    </article>
                </div>
            </div>

            <div class=" tab-pane fade" id="filter-buyerJobs">
                <!-- for buyer -->
                <div class="col-md-6 col-sm-12">
                    <article class="card mb-4">
                        <div class="row card-body">
                            <div class="p-3">
                                <h3 class="h3  d-inline"><a class="post-title" href="post-elements.html">Web development</a></h3>
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
                                                <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                                    <i class="bi bi-person"></i>
                                                    <span>Proposals</span>
                                                </a>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                                    <i class="bi bi-gear"></i>
                                                    <span>Submissions</span>
                                                </a>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
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
                                            <span>client Name </span>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="ti-timer"></i>$123445
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="ti-calendar"></i>Due: 23 July 2022
                                    </li>
                                </ul>
                                <ul class="list-inline widget-list-inline">
                                    <li class="list-inline-item"><a href="">Completed</a></li>
                                </ul>
                                <p>Milestone 1</p>
                                <div class="text-start d-inline">
                                    <input class="btn btn-primary" type="submit" name="submit-contact" id="submit_contact" value="Details">
                                </div>

                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
</x-layout>