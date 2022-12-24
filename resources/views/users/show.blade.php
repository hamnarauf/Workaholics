<x-layout>

    <div class="author">
        <div class="container">
            <div class="row no-gutters justify-content-center">
                <div class="col-lg-3 col-md-4 mb-4 mb-md-0">
                    <img class="author-image" src="{{ asset($user['img']) }}">
                </div>
                <div class="col-md-8 col-lg-6 text-md-left">
                    @include('users.profile.basicProfile')
                </div>
            </div>
        </div>
        <svg class="author-border" height="240" viewBox="0 0 2202 240" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 123.043C67.2858 167.865 259.022 257.325 549.762 188.784C764.181 125.427 967.75 112.601 1200.42 169.707C1347.76 205.869 1901.91 374.562 2201 1" stroke-width="2" />
        </svg>
    </div>
    <section class="section-sm p-0" id="post">
        <div class=" row">
            <div class="col-md-4 col-sm-12">
                <div>
                    <div class="article card profile-education">
                        <div class="education article card">
                            <h2 class="text-center mt-4">Education</h2>
                            @include('users.profile.education')
                        </div>

                        <div class="work article card mt-5">
                            <h2 class="text-center mt-5">Work</h2>
                            @include('users.profile.work')
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <x-tabMenu>
                    <x-tab class="active" sectionId="#filter-sellerProfile" title="Seller"></x-tab>
                    <x-tab class="" sectionId="#filter-buyerProfile" title="Buyer"></x-tab>
                </x-tabMenu>

                <div class="tab-content">
                    <div class="tab-pane active show row" id="filter-sellerProfile">
                        <x-sectionTitle title="Gigs" desc=""></x-sectionTitle>
                        @include('users.profile.gigs')

                        <x-sectionTitle title="Jobs" desc="Work history on Workaholics"></x-sectionTitle>
                        @include('users.profile.projects')
                    </div>
                    <div class="row tab-pane" id="filter-buyerProfile">
                        <x-sectionTitle title="Projects Posted" desc="Work history on Workaholics"></x-sectionTitle>
                        @include('users.profile.jobsPosted')
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>