<div class="row">
    
@foreach($categories as $category)
    <x-categoryCard title="{{ $category->name }}" id="{{ $category->id }}"></x-categoryCard>
    
    @if ($loop->index % 3 === 0 && $loop->index != 0)
        </div>        
    @endif

@endforeach

