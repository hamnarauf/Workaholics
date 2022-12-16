<x-layout>
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">
            <div class="section-title top-header">
                <h2>Find Talent/Job</h2>
                <p>Interact with the community and earn.</p>
            </div>

            <x-tabmenu>
                <x-tab title="Jobs" filter=".filter-jobs" class="active" sectionId="#filter-jobs"></x-tab>
                <x-tab title="Gigs" filter=".filter-gigs" class=""  sectionId="#filter-gigs"></x-tab>
            </x-tabmenu>
            <div class="tab-content">
                @include('find.jobs')
                @include('find.gigs')
            </div>
        </div>
    </section>
</x-layout>