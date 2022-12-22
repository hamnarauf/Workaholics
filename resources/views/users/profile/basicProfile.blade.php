<?php
$langs = array("English", "Chinese");
?>

<x-basicProfile
    name="{{ $user['name'] }}"
    heading="Author & developer of Bexer, Biztrox theme"
    country="{{ $user['country'] }}"
    :langs=$langs
    skills="{{ $user['skills'] }}"
    hoursPerWeek="30"
></x-basicProfile>