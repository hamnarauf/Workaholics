<form>
    <div class="form-group">
      <label for="cars">Choose a Milestone:</label><br>
      <select name="cars" id="cars">
        <option value="">Milstone1</option>
        <option value="">Milstone2</option>
        <option value="">Milstone3</option>
        <option value="">Milstone4</option>
      </select> 
    </div>
    <div class="form-group">
      <label for="msg">Message:</label>
      <textarea class="form-control" id="msg" rows="10" placeholder="Leave a message with your submission" name="msg"></textarea>
    </div>
    <div class="form-row">
      <div class="form-group">
          <label for="fname">File Name:</label>
          <input type="text" class="form-control" id="fname" placeholder="name your file" name="fname">
      </div>
    </div>
    <div class="form-group">
      <label for="submission">Submission File:</label>
      <input type="file" class="form-control-file" id="submission" name="submission" multiple="multiple">
    </div>
    <br>
    <button type="submit" class="btn btn-primary">submit</button>
  </form>