@php
    if ($project->skills == null) {
        $skills = ['No skills'];
    }else {
        $skills = $project->skills;
    }
@endphp


<x-jobDetails
    category="{{ $category->name }}"
    title="{{ $project->name }}"
    datePosted="{{ $project->created_at }}"
    budget="{{ $project->budget }}"
    expectedTime="{{ $project->expected_by }}"
    desc="{{ $project->description }}"
    :skills=$skills
    >
</x-jobDetails>