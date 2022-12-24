<x-layout>
    <section>
        <div class="container mt-2">
            <h3 class="mb-3">Bootstrap 5 Tabs</h3>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="tab" href="#home">
                        Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#profile">
                         Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#contact">
                         Contact</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="home">
                    home
                </div>
                <div class="tab-pane" id="profile">
                    prfile
                </div>
                <div class="tab-pane" id="contact">
                   contact
                </div>
            </div>

        </div>
    </section>
</x-layout>