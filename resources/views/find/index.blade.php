<x-layout>
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">
            <div class="section-title top-header">
                <h2>Find Talent/Job</h2>
                <p>Interact with the community and earn.</p>
            </div>

            <x-tabmenu>
                <x-tab title="Jobs" class="active" sectionId="#filter-jobs"></x-tab>
                <x-tab title="Gigs" class="" sectionId="#filter-gigs"></x-tab>
            </x-tabmenu>
            <div class="tab-content">
                <div class=" tab-pane active fade in tab-pane" id="filter-jobs">
                    @include('find.jobs')
                </div>

                <div class=" tab-pane fade"  id="filter-gigs">
                    @include('find.gigs')
                </div>
            </div>
        </div>
    </section>
</x-layout>