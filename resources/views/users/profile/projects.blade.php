<?php
    $skill_list = array();
    $job_skill = array();

    foreach ($workHistory as $w){
        if ($w['p_name'] == null){
            $name = $w['g_name'];
            $desc = $w['g_des'];
            if (is_null($w['g_skills']) == 0) {
                foreach($w['g_skills'] as $skill){
                    array_push($job_skill, $skill);
                }   
            }
        }
        else {
            $name = $w['p_name'];
            $desc = $w['p_des'];
            if (is_null($w['p_skills']) == 0) {
                foreach($w['p_skills'] as $skill){
                    array_push($job_skill, $skill);
                }   
            }
        }
    }

    array_push($skill_list, $job_skill);
?>

@foreach($workHistory as $work)
<x-list-item
    title="{{ $name }}"
    personName="{{ $work['u_name'] }}"
    personImg="{{ asset($work['u_img']) }}"
    price="${{ $pricings[$loop->index] }}"
    date="{{$deadlines[$loop->index]}}"
    :tags="$skill_list[$loop->index]"
    desc="{{ $desc }}"
>
<x-feedback
hasfeedback="true"
    stars="{{ $work['rating'] }}"
    clientImg="{{ asset($work['u_img']) }}"
    clientName="{{ $work['u_name'] }}"
    clientDate="{{ $work['updated_at'] }}"
    clientTime="{{ $work['updated_at'] }}"
    clientComment="{{ $work['review'] }}"
    
    freelancerImg="{{ asset($user['img']) }}"
    freelancerName="{{ $user['name'] }}"
    freelancerDate="20 Jan 2022"
    freelancerTime="6 00 pm"
    freelancerComment="Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus."
    
    ></x-feedback>
</x-list-item>
@endforeach