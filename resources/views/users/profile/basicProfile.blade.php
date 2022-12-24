<?php 
    $skill_list = array();
    foreach ( $user['skills'] as $skill) {
        array_push($skill_list, $skill);
    }
?>

<x-basicProfile
    name="{{ $user['name'] }}"
    description="{{ $catList[0]['name'] }}"
    country="{{ $user['country'] }}"
    :skills=$skill_list
    projectsPosted="{{ $jobDetails['projectsPosted'] }}"
    jobCount="{{ $jobDetails['jobCount'] }}"
></x-basicProfile>