<div class="activity-item d-flex">

    <div class="activite-label">Due {{$dueDate}}</div>
    <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
    <div class="container">
        <div class="row">
            <div class="col-9">
                <div class="activity-content title">{{$title}}</div><br>
            </div>
            <div class="col">
                <div class="activity-content title">Amount: {{$price}}</div><br>
            </div>
        </div>
        <div class="row">
            <div class="activity-content"> {{$desc}} </div>
        </div><br>
    </div>
</div>