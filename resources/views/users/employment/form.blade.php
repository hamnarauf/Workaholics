    <form action="" method="POST">
        @csrf
            <div class="container rounded bg-white mt-5 mb-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex justify-content-between align-items-center experience"><span>Add to Employment History</span><span class="border px-3 p-1 add-experience">Employment</span></div><br>
                        <div class="row mt-2">
                            <div class="col-md-12"><label class="labels">Title</label><input type="text" class="form-control" value=""></div>
                            <div class="col-md-12"><label class="labels">Company</label><input type="text" class="form-control" value=""></div>
                            <div class="col-md-12"><label class="labels">Description</label><textarea rows=5 type="text" class="form-control" placeholder="Describe your job here"></textarea></div>
                        </div>
                          
                        <div class="row mt-3">
                            <div class="col-md-6"><label for="date" >Joining Date:</label><input type="date" class="form-control" id="date" name="jdate"></div>
                            <div class="col-md-6"><label for="date" >Leaving Date:</label><input type="date" class="form-control" id="date" name="ldate"></div>
                        </div>
                            <div class="row mt-3">
                              <div class="col-md-6"><label class="labels">City</label><input name="state" type="text" class="form-control" placeholder="State"></div>
                              <div class="col-md-6"><label class="labels">Country</label><input name="country" type="text" class="form-control" placeholder="Country"></div>
                        </div>
                    </div>
                  <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Save Profile</button></div>
              </div>
          </div>
          </div>
          </div>
      </form>
