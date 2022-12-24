<div class="row">

@foreach($projects as $project)
    <x-jobCard
        title="{{ $project->name }}"
        clientImg="{{ $project->img }}" 
        clientName="{{ $project->u_name }}"
        price="${{ $project->budget }}"
        date="{{ $project->expected_by }}"
        id="{{ $project->id }}"
        category="{{ $project->c_name }}"
        desc="{{ $project->description }}"
        jobImg="https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8d2Vic2l0ZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=400&q=60"
    ></x-jobCard>
    
    @endforeach
</div>        