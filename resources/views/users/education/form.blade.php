<section>
    <form action="/users/{{ Auth::id() }}/edit" method="POST">
        @csrf
            <div class="container rounded bg-white mt-5 mb-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex justify-content-between align-items-center experience"><span>Add to Education History</span><span class="border px-3 p-1 add-experience">Education</span></div><br>
                        <div class="row mt-2">
                            <div class="col-md-12"><label class="labels">Institute</label><input type="text" class="form-control" value="" name="institute"></div>
                            <div class="col-md-12"><label class="labels">Title</label><input type="text" class="form-control" value="" name="title"></div>
                        </div>
                          
                        <div class="row mt-3">
                            <div class="col-md-6"><label for="date" >Graduation Date:</label><input type="date" class="form-control" id="date" name="date"></div>
                        </div>
                            <div class="row mt-3">
                              <div class="col-md-6"><label class="labels">City</label><input name="city" type="text" class="form-control" placeholder="City"></div>
                              <div class="col-md-6"><label class="labels">Country</label><input name="country" type="text" class="form-control" placeholder="Country"></div>
                        </div>
                    </div>
                  <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Save Profile</button></div>
              </div>
          </div>
          </div>
          </div>
      </form>
</section>