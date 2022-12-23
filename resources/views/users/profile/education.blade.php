<?php
$skills = array("php", "javasript", "CSS", "Design");
?>

<x-basicCard
    heading="{{ $education['institute'] }}"
    desc="{{ $education['title'] }}"
    date="{{ $education['date_of_graduation'] }}"
    location="{{ $education['city'] }}, {{ $education['country'] }}"
    :tags=$skills
></x-basicCard>
