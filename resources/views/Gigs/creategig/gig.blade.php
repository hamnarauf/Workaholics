<form action="/gigs" method="POST">
  @csrf
    <div class="form-group">
      <label for="exampleInputText1">Title of the Gig:</label>
      <input required type="text" class="form-control" id="exampleInputText1" placeholder="Title" name="name">
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Description</label>
      <textarea required class="form-control" id="exampleFormControlTextarea1" rows="10" placeholder="Describe what you offer in this Gig. Talents, Skills etc." name="description"></textarea>
    </div>
    <div class="form-group">
      <label for="exampleInputText2">Skills:</label>
      <input required type="text" class="form-control" id="exampleInputText2" placeholder="e.g. Web Development, Logo Design" name="skills">
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">Category:</label><br>
      <select required class="form-control col-3" id="exampleFormControlSelect1" name="category">
        @foreach ($categories as $category)
          <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
      </select>
    </div>
    <div class='form-row'>
      <div class="form_group">
        <label for="budget">Budget:</label>
        <input type="number" required min="1" max="100000" class="form-control col-7" id="quantity" name="budget" placeholder="$0"><br>
      </div>
      <div class="form_group">
        <label for="days">Required Days:</label>
        <input type="number" required min="1" class="form-control col-7" id="quantity" name="required_days" placeholder="0"><br>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
</form>