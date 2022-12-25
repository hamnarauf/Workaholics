<div class="activity-item d-flex col-md-10 col-12 card p-4 my-2">
    <div class="container">
        <div class="activity-content title d-inline h4">{{$title}}</div>
        <div class="d-inline mx-3">
            <x-tagMenu>
                <x-tag title="{{ $status }}"></x-tag>
            </x-tagMenu>

            <div class="float-md-right mr-3">
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
            <i class="ti-money"></i>Amount: {{$price}}
            </li>
            <li class="list-inline-item">
                <i class="ti-calendar"></i> Due: {{$dueDate}}
            </li>
        </ul>

        <div class="activity-content"> {{$desc}} </div><br>
    </div>
</div>