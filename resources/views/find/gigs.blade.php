<div class="row tab-pane fade" id="filter-gigs">

@foreach($gigs as $gig)
    <x-gigCard
        category="{{ $gig->c_name }}"
        price="${{ $gig->budget }}"
        title="{{ $gig->name }}"
        desc="{{ $gig->description }}"
        freelancer="{{ $gig->u_name }}"
        clicks="3"
        saves="10"
        projImg="https://images.unsplash.com/photo-1661956601349-f61c959a8fd4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwyMXx8fGVufDB8fHx8&auto=format&fit=crop&w=400&q=60"
        freelancerImg="https://images.unsplash.com/photo-1499996860823-5214fcc65f8f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8aHVtYW58ZW58MHx8MHx8&auto=format&fit=crop&w=400&q=60">
    </x-gigCard>

    @if ($loop->index % 3 === 0 && $loop->index != 0)
        </div>        
    @endif
@endforeach

