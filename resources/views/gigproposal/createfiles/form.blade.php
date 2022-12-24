<form action="/gigproposals" method="POST" enctype="multipart/form-data">
  @csrf
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Proposal:</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="15" placeholder="Describe your proposal here." name="proposal"></textarea>
    </div>
    <div class='form-row'>
      <div class="form_group">
        <label for="bid">Your Bid:</label>
        <input type="number" class="form-control col-7" id="quantity" name="bid" placeholder="$0"><br>
      </div>
      <div class="form_group">
        <label for="date">Expected by:</label>
        <input type="date" class="form-control col-11" id="date" name="expected_by">
      </div>
    </div>
    <div class="form-group">
        <label for="proposalAttachment">Attachment Files <small>(if any):</small></label>
        <input type="file" class="form-control-file" id="proposalAttachment" name="file">
    </div>
    <input type="hidden" value= "{{ $id }}" name="project_id">
    <button type="submit" class="btn btn-primary">Send Proposal</button>
  </form>