<form>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Proposal:</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="15" placeholder="Describe your proposal here."></textarea>
    </div>
    <div class='form-row'>
      <div class="form_group">
        <label for="bid">Your Bid:</label>
        <input type="number" class="form-control col-7" id="quantity" name="bid" placeholder="000"><br>
      </div>
      <div class="form_group">
        <label for="date">Expected by:</label>
        <input type="date" class="form-control col-11" id="date" name="date">
      </div>
    </div>
    <div class="form-group">
        <label for="proposalAttachment">Attachment Files <small>(if any):</small></label>
        <input type="file" class="form-control-file" id="proposalAttachment">
    </div>
    <button type="submit" class="btn btn-primary">Send Proposal</button>
  </form>