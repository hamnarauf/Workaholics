<form action="/users/edit" method="POST">
  @csrf
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img class="rounded-circle mt-5" width="150px" src="{{ asset($user['img']) }}">
                    <span class="font-weight-bold">{{ $user['name'] }}</span>
                    <span class="text-black-50">{{ $user['email'] }}</span><span> </span></div>
                    <div class="mt-2 text-center"><a class="btn btn-primary" href="/users/education">Add Education</a></div>
                    <div class="mt-1 text-center"><a class="btn btn-primary profile-button" type="submit" href="/users/employment">Add Employment</a></div>

            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="text-right">Profile Settings</h5>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">Name</label><input name="name" type="text" class="form-control" placeholder="Full name" value="{{ $user['name'] }}"></div>
                        <div class="col-md-12"><label class="labels">About you</label><textarea name="description" class="form-control" placeholder="A few words about yourself" value="" rows=7>{{ $user['description'] }}</textarea></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Company</label><input name="company" type="text" class="form-control" placeholder="Enter company name you work for" value="{{ $user['company'] }}"></div>
                        <div class="col-md-12"><label class="labels">Skills</label><input name="skills" type="text" class="form-control" placeholder="Web development, Graphic design,..." value= "{{ $skills }}"></div>
                    </div>
                    <div class="row mt-3">
                        <label for="submission">Change Profile Picture:</label>
                        <input type="file" class="form-control-file" id="submission" name="submission">
                      </div>
                    <div class="row mt-3"> 
                        <a style="text-decoration: underline; color:blue;"><small>Change Password</small></a>
                    </div>
                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Save Profile</button></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex justify-content-between align-items-center experience"><span>Edit Contact/Address Information</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Contact</span></div><br>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Mobile Number</label><input name="mobileNo" type="text" class="form-control" placeholder="Enter phone number" value="{{ $user['mobileNo'] }}"></div>
                    <div class="col-md-12"><label class="labels">Street Address</label><input name="street_address" type="text" class="form-control" placeholder="Enter street address" value="{{ $user['street_address'] }}"></div>
                    <div class="col-md-12"><label class="labels">Zip</label><input name="zip" type="text" class="form-control" placeholder="Enter zip code" value="{{ $user['zip'] }}"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">State/Region</label><input name="state" type="text" class="form-control" value="{{ $user['state'] }}" placeholder="State"></div>
                    <div class="col-md-6"><label class="labels">Country</label><input name="country" type="text" class="form-control" placeholder="Country" value="{{ $user['country'] }}"></div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</form>