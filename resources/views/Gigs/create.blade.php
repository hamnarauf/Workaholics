<x-layout>
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">
            <div class="section-title top-header">
                <h2>Find Talent/Job</h2>
                <p>Interact with the community and earn.</p>
            </div>

            <x-tabmenu>
                <h2 class="btn btn-primary">Create Gig</h2>
            </x-tabmenu>
            <div class="tab-content">
                <div class=" tab-pane active show" id="filter-jobs">
                    @include('gigs.creategig.gig')
                </div>
            </div>
        </div>
    </section>
</x-layout>