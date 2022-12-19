<?php
$skills = array("php", "javasript", "CSS", "Design");
?>

<x-list-item
    title="Develop a PHP Website."
    personName="John Doe"
    personImg="https://images.unsplash.com/photo-1527689368864-3a821dbccc34?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fHdlYnNpdGV8ZW58MHx8MHx8&auto=format&fit=crop&w=400&q=60"
    price="$1000"
    date="15 Jan, 2020"
    :tags=$skills
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