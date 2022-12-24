<?php 
    $skill_list = array();
    if ($user['skills'] != "") {
        foreach ( $user['skills'] as $skill) {
            array_push($skill_list, $skill);
        }
    }
?>

<x-basicProfile
    name="{{ $user['name'] }}"
    description=""
    country="{{ $user['country'] }}"
    :skills=$skill_list
    projectsPosted="{{ $jobDetails['projectsPosted'] }}"
    jobCount="{{ $jobDetails['jobCount'] }}"
></x-basicProfile>
