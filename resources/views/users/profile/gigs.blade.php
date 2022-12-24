<?php 
    if (is_null($user['skills']) == 0) {
        $skill_list = array();
        foreach ( $user['skills'] as $skill) {
            array_push($skill_list, $skill);
        }
    }
?>

@foreach($gigs as $gig)
<x-list-item-with-image
    title="{{ $gig['name'] }}"
    personName="{{ $catList[$loop->index]['name'] }}"
    personImg="https://images.unsplash.com/photo-1527689368864-3a821dbccc34?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fHdlYnNpdGV8ZW58MHx8MHx8&auto=format&fit=crop&w=400&q=60"
    price="${{ $gig['budget'] }}"
    date="{{ $gig['required_days'] }} days"
    :tags=$skill_list
    desc="{{ $gig['description'] }}"
    imgSrc="https://images.unsplash.com/photo-1527689368864-3a821dbccc34?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fHdlYnNpdGV8ZW58MHx8MHx8&auto=format&fit=crop&w=400&q=60"
>
</x-list-item-with-image>
@endforeach