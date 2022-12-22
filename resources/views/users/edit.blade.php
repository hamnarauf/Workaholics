<x-layout>
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">
            <div class="section-title top-header">
                <h2>Edit your Profile</h2>
            </div>
            <div class="form-center">
                {{-- @include('users.forms.passwordForm') --}}
                @include('users.forms.form')
            </div>
        </div>
    </section>
</x-layout>