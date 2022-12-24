<x-layout>
    <section class="single-block-wrapper section-padding">
    
        <div class="row">
            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">
                    <!-- Right side columns -->
                    <div class="col-lg-12">
                        <!-- Recent Activity -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title text-center mt-4">Milestones <span>| Timeline</span></h4>

                                <div class="activity">
                                    @include('milestones.show')

                                </div>
                                <div class="mt-10">
                                    <a href="{{ url('/milestones/create/'. $job_id) }}" class="btn btn-primary mt-10 ">Propose New Milestone</a>
                                </div>
                            </div>
                        </div><!-- End Recent Activity -->
                    </div>
                </div>
            </div>
    </section>

</x-layout>