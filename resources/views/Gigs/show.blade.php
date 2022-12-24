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
                        <div class="sidebar-wrap mt-5 mt-lg-0">
                            <div class="sidebar-widget about mb-5 text-center p-3">
                                @include('Gigs.gigDetail.client')
                            </div>
                            <div class="sidebar-widget follow mb-5 text-center">
                                <form action="/gigproposals/create" method="POST">
                                    @csrf
                                    <input type="number" name="id" hidden value="{{ $gig->id }}">
                                    <input @if ($submit > 0) disabled @endif class="btn btn-primary"
                                        type="submit" name="submit-contact" id="submit_contact"
                                        value="Request to Order">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    @include('Gigs.gigDetail.detail')
                </div>
            </div>
        </div>
        <!-- initialize jQuery Library -->
</x-layout>
