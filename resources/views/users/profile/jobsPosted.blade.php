<?php 
    $skill_list = array();

    foreach ($projs as $p) {
        if (($p['skills']) != "") {
            $proj_skill = array();

            foreach ($p['skills'] as $skill) {
                array_push($proj_skill, $skill);    
            }
            array_push($skill_list, $proj_skill);
        }
    }
?>

@foreach ($projs as $proj)
<x-list-item
    title="{{ $proj['name'] }}"
    personName=""
    personImg=""
    price="${{ $proj['budget'] }}"
    date="{{ $proj['updated_at'] }}"
    :tags="$skill_list[$loop->index]"
    desc="{{ $proj['description'] }}"
>
<x-feedback
    hasfeedback="false"
    stars="5"
    clientImg="https://images.unsplash.com/photo-1527689368864-3a821dbccc34?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fHdlYnNpdGV8ZW58MHx8MHx8&auto=format&fit=crop&w=400&q=60"
    clientName="clientName"
    clientDate="20 Jan 2022"
    clientTime="6 00 pm"
    clientComment="Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus."
    
    freelancerImg="https://images.unsplash.com/photo-1527689368864-3a821dbccc34?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fHdlYnNpdGV8ZW58MHx8MHx8&auto=format&fit=crop&w=400&q=60"
    freelancerName="freelancer name"
    freelancerDate="20 Jan 2022"
    freelancerTime="6 00 pm"
    freelancerComment="Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus."
    
    ></x-feedback>
</x-list-item>
@endforeach