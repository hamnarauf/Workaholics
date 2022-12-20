@php
$skills = $gig->skills;
@endphp

<x-gigDetails
    category="{{ $category->name }}"
    title="{{ $gig->name }}"
    datePosted="{{ $gig->created_at->diffForHumans() }}"
    budget="{{ $gig->budget }}"
    expectedTime="{{ $gig->deadline }}"
    desc="{{ $gig->description }}"
    :skills=$skills
    >
</x-gigDetails>