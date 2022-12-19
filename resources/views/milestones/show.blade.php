@foreach ($milestones as $milestone )
<x-milestone
dueDate="{{ $milestone->expected_by }}"
title="{{ $milestone->name }}"
desc="{{ $milestone->description }}"
price="{{ $milestone->budget }}"
></x-milestone>
@endforeach


