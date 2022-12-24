@foreach ($unapproved_milestones as $milestone )
<x-milestone
dueDate="{{ $milestone->expected_by }}"
title="{{ $milestone->name }}"
desc="{{ $milestone->description }}"
price="{{ $milestone->budget }}"
status="{{ $milestone->status }}"
button={{ true }}
id="{{ $milestone->id }}"
role="{{ $role }}"
></x-milestone>
@endforeach

@foreach ($approved_milestones as $milestone )
<x-milestone
dueDate="{{ $milestone->expected_by }}"
title="{{ $milestone->name }}"
desc="{{ $milestone->description }}"
price="{{ $milestone->budget }}"
status="{{ $milestone->status }}"
id="{{ $milestone->id }}"
button="{{ false }}"
role="{{ $role }}"
></x-milestone>
@endforeach


