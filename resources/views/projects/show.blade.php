
<x-layout>
    <!--search overlay end-->
    <section class="single-block-wrapper section-padding">
        @if ($submit > 0)
            <div class="alert alert-success" role="alert">
                Already submitted a proposal for this project
            </div>            
        @endif

        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="sidebar sidebar-right">
                        <div class="sidebar-wrap mt-lg-0">
                            <div class="sidebar-widget about mb-3 text-center pb-3">
                                @include('projects.projectdetails.client')
                            </div>
                            <div class="sidebar-widget follow mb-5 text-center">
                                <form action="/proposals/create" method="POST">
                                    @csrf
                                    <input type="number" name="id" hidden value="{{ $project->id }}" >
                                    <input 
                                    @if($submit>0)
                                        disabled
                                    @endif
                                    class="btn btn-primary" type="submit" name="submit-contact" id="submit_contact" value="Submit Proposal">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    @include('projects.projectdetails.detail')
                </div>
    </section>
    <!-- initialize jQuery Library -->
</x-layout>