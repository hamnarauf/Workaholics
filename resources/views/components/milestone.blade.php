<div class="activity-item d-flex">
    <div class="activite-label">Due {{$dueDate}}</div>
    <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
    <div class="container">
        <div class="activity-content title d-inline">{{$title}}</div>
        <div class="d-inline mx-2">
            <x-tagMenu>
                <x-tag title=Pending></x-tag>
            </x-tagMenu>

            <div class="float-right">
                <input class="btn btn-primary" type="submit" name="submit-contact" id="submit_contact" value="Accept">
                <input class="btn btn-primary" type="submit" name="submit-contact" id="submit_contact" value="Reject">
            </div>
        </div>

        <ul class="card-meta list-inline">
            <li class="list-inline-item">
                <i class="ti-calendar"></i> Amount: {{$price}}
            </li>
        </ul>

        <div class="activity-content"> {{$desc}} </div><br>
    </div>
</div>