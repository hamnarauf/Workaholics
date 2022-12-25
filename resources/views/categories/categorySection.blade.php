<div class="row">
@foreach($categories as $category)
    <x-categoryCard title="{{ $category->name }}" id="{{ $category->id }}"></x-categoryCard>
     
@endforeach
</div>       
