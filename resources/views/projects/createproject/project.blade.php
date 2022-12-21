<form action="/projects" method="POST">
  @csrf
  <div class="form-group">
    <label for="exampleInputText1">Title of the Project:</label>
    <input required type="text" class="form-control" id="exampleInputText1" placeholder="Title" name="name">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description:</label>
    <textarea required class="form-control" id="exampleFormControlTextarea1" rows="10" placeholder="Describe what you want for this Project. Talents, Skills etc." name="description"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputText2">Skills:</label>
    <input required type="text" class="form-control" id="exampleInputText2" placeholder="Title" name="skills">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Category:</label>
    <select required class="form-control" id="exampleFormControlSelect1" name="category">
    @foreach ($categories as $category)
      <option value="{{ $category->id }}">{{ $category->name }}</option>
    @endforeach
    </select>
  </div>
  <div class='form-row'>
    <div class="form_group">
      <label for="budget">Budget:</label>
      <input required type="number" class="form-control col-7" id="quantity" name="budget" placeholder="$0"><br>
    </div>
    <div class="form_group">
      <label for="date">Expected by:</label>
      <input required type="date" class="form-control col-10" id="date" name="expected_by">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Create</button>
</form>