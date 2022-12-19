<form>
  <div class="form-group">
    <label for="exampleInputText1">Title of the Job:</label>
    <input type="text" class="form-control" id="exampleInputText1" placeholder="Title">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description:</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" placeholder="Describe what you want for this Job. Talents, Skills etc."></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputText2">Skills:</label>
    <input type="text" class="form-control" id="exampleInputText2" placeholder="Title">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Category:</label>
    <select class="form-control" id="exampleFormControlSelect1">
    @foreach ($categories as $category)
      <option>{{ $category->name }}</option>
    @endforeach
    </select>
  </div>
  <div class='form-row'>
    <div class="form_group">
      <label for="budget">Budget:</label>
      <input type="number" class="form-control col-7" id="quantity" name="budget" placeholder="000"><br>
    </div>
    <div class="form_group">
      <label for="date">Expected by:</label>
      <input type="date" class="form-control col-10" id="date" name="date">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Create</button>
</form>