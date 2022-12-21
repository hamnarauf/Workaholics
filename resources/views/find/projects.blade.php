<div class="row">

@foreach($projects as $project)
    <x-jobCard
        title="{{ $project->name }}"
        clientImg="{{ $project->img }}" 
        clientName="{{ $project->u_name }}"
        price="${{ $project->budget }}"
        date="{{ $project->expected_by }}"
        category="{{ $project->c_name }}"
        desc="{{ $project->description }}"
        jobImg="https://source.unsplash.com/random/600x600?{{ $project->c_name }}"
    ></x-jobCard>
    
    @if ($loop->index % 3 === 0 && $loop->index != 0)
        </div>        
    @endif

@endforeach