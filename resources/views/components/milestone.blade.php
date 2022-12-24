<div class="activity-item d-flex">
    <div class="activite-label">Due {{$dueDate}}</div>
    <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
    <div class="container">
        <div class="activity-content title d-inline">{{$title}}</div>
        <div class="d-inline mx-2">
            <x-tagMenu>
                <x-tag title="{{ $status }}"></x-tag>
            </x-tagMenu>

            <div class="float-right">
                <form action="/milestones" method="POST">
                    @csrf 
                    @method('PUT')
                    @if ($button)
                    <input class="btn btn-primary" type="submit" name="action" id="action" value="Accept">
                    <input class="btn btn-primary" type="submit" name="action" id="action" value="Reject">    
                    @elseif ($role == 'employee' && $status == 'In Progress')
                    <input class="btn btn-primary" type="submit" name="action" id="action" value="Submit">
                    
                    @elseif ($role == 'employer' && $status == 'Completed')
                        <input class="btn btn-primary" type="submit" name="action" id="action" value="Paid">
                
                    @endif
                    <input type="number" name="id" id="id" hidden value="{{ $id }}">
                </form>

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