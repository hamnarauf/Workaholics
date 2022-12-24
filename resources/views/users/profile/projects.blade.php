<?php
    $skill_list = array();
    $job_skill = array();

    foreach ($workHistory as $w){    
        if ($w['p_name'] == ''){
            $name = $w['g_name'];

            if (is_null($w['g_skills']) == 0) {
                foreach($w['g_skills'] as $skill){
                    array_push($job_skill, $skill);
                }   
            }
        }
        else {
            $name = $w['p_name'];

            if (is_null($w['p_skills']) == 0) {
                foreach($w['p_skills'] as $skill){
                    array_push($job_skill, $skill);
                }   
            }
        }
        array_push($skill_list, $job_skill);
    }
?>

@foreach($workHistory as $work)
<x-list-item
    title="{{ $name }}"
    personName="{{ $work['u_name'] }}"
    personImg="{{ asset($profilePics[$loop->index]) }}"
    price="${{ $pricings[$loop->index] }}"
    date="{{$deadlines[$loop->index]}}"
    :tags="$skill_list[$loop->index]"
    desc="Heading example Here is example of hedings. You can use this heading by following markdownify rules. eading example Here is example of hedings. You can use this heading by following markdowni"
>
<x-feedback
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