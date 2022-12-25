<?php 
    $skill_list = array();

    foreach ($gigs as $g) {
        if (($g['skills']) != "") {
            $gig_skill = array();

            foreach ($g['skills'] as $skill) {
                array_push($gig_skill, $skill);    
            }
            array_push($skill_list, $gig_skill);
        }
    }
?>

@foreach($gigs as $gig)
<x-list-item-with-image
    title="{{ $gig['name'] }}"
    personName=""
    personImg=""
    price="${{ $gig['budget'] }}"
    date="{{ $gig['required_days'] }} days"
    :tags="$skill_list[$loop->index]"
    desc="{{ $gig['description'] }}"
    imgSrc="https://images.unsplash.com/photo-1527689368864-3a821dbccc34?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fHdlYnNpdGV8ZW58MHx8MHx8&auto=format&fit=crop&w=400&q=60"
>
</x-list-item-with-image>
@endforeach