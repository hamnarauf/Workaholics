<?php
$skills = array("php", "javasript", "CSS", "Design");
?>

<x-basicCard
heading="{{$employment['title']}}"
company="{{$employment['company']}}"
desc="{{$employment['description']}}"
date_of_joining="$employment['date_of_joining']"
date_of_leaving="$employment['date_of_leaving']"
location="$employment['city'], {{ $employment['country'] }}"
:tags=$skills
></x-basicCard>
