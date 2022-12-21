<x-layout>
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">
            <div class="section-title top-header">
                <h2>Find Talent/Project</h2>
                <p>Interact with the community and earn.</p>
            </div>

            <x-tabmenu>
                <x-tab title="Projects" class="active" sectionId="#filter-jobs"></x-tab>
                <x-tab title="Gigs" class="" sectionId="#filter-gigs"></x-tab>
            </x-tabmenu>
            <div class="tab-content">
                <div class=" tab-pane active fade in tab-pane" id="filter-jobs">
                    @include('find.projects')
                </div>

                <div class=" tab-pane fade"  id="filter-gigs">
                    @include('find.gigs')
                </div>
            </div>
        </div>
    </section>
</x-layout>