<x-layout>
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">
            <div class="section-title top-header">
                <h2>Edit your Profile</h2>
            </div>
            <div class="form-center">
                @include('1editProfile.passwordForm')
                {{-- @include('1editProfile.form') --}}
            </div>
        </div>
    </section>
</x-layout>