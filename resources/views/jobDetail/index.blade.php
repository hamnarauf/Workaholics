<x-layout>

    <!--search overlay end-->
    <section class="single-block-wrapper section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="sidebar sidebar-right">
                        <div class="sidebar-wrap mt-5 mt-lg-0">
                            <div class="sidebar-widget about mb-5 text-center p-3">
                                @include('jobDetail.client')
                            </div>
                            <div class="sidebar-widget follow mb-5 text-center">
                                <input class="btn btn-primary" type="submit" name="submit-contact" id="submit_contact" value="Submit Proposal">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    @include('jobDetail.detail')
                </div>
    </section>
    <!-- initialize jQuery Library -->
</x-layout>