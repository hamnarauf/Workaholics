<div class="row">

@foreach($gigs as $gig)
    <x-gigCard
        category="{{ $gig->c_name }}"
        price="${{ $gig->budget }}"
        title="{{ $gig->name }}"
        desc="{{ $gig->description }}"
        freelancer="{{ $gig->u_name }}"
        clicks="{{ $gig->required_days }}"
        saves="10"
        id="{{ $gig->id }}"
        projImg="https://images.unsplash.com/photo-1661956601349-f61c959a8fd4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwyMXx8fGVufDB8fHx8&auto=format&fit=crop&w=400&q=60"
        freelancerImg="">
    </x-gigCard>
    
    @endforeach
</div>        