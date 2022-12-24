<form action="/milestones" method="POST">
    @csrf
    <div class="form-group">
      <label for="name">Milestone Name:</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="name">
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Description:</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="5" placeholder="Describe your proposal here."></textarea>
    </div>
    <div class='form-row'>
      <div class="form_group">
        <label for="budget">Budget:</label>
        <input min="0" type="number" class="form-control col-7" id="quantity" name="budget" placeholder="0000"><br>
      </div>
      <div class="form_group">
        <label for="date">Expected by:</label>
        <input type="date" class="form-control col-11" id="date" name="expected_by">
      </div>
    </div>
    <input type="number" hidden name="job_id" value="{{ $job_id }}">
    <button type="submit" class="btn btn-primary">Create Milestone</button>
  </form>