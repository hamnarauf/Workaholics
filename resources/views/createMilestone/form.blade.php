<form>
    <div class="form-group">
      <label for="name">Milestone Name:</label>
      <input type="text" class="form-control" id="name" placeholder="name">
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Description:</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Describe your proposal here."></textarea>
    </div>
    <div class='form-row'>
      <div class="form_group">
        <label for="budget">Budget:</label>
        <input type="number" class="form-control col-7" id="quantity" name="budget" placeholder="0000"><br>
      </div>
      <div class="form_group">
        <label for="date">Expected by:</label>
        <input type="date" class="form-control col-11" id="date" name="date">
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Create Milestone</button>
  </form>