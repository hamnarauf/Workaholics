<div class="activity-item d-flex">

    <div class="activite-label">Due {{$dueDate}}</div>
    <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
    <div class="row">
        <div class="row">
            <div class="col-9">
                <div class="activity-content title">{{$title}}</div>
            </div>
            <div class="col">
                <div class="activity-content title">Amount: {{$price}}</div>
            </div>
        </div>
        <div class="row">
            <div class="activity-content"> {{$desc}} </div>
        </div>
    </div>
</div>