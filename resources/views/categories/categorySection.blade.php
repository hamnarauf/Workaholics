<div class="row">
    
@foreach($categories as $category)
    <x-categoryCard title="{{ $category->name }}" desc="MERN stack, MEAN stack, PHP, laravel" image="https://images.unsplash.com/photo-1669384056947-b6497936c8a6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwxN3x8fGVufDB8fHx8&auto=format&fit=crop&w=400&q=60"></x-categoryCard>
    
    @if ($loop->index % 3 === 0 && $loop->index != 0)
        </div>        
    @endif

@endforeach

