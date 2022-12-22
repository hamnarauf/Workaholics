<form>
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                    <span class="font-weight-bold">{{ user['name'] }}</span>
                    <span class="text-black-50">{{ user['email'] }}</span><span> </span></div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="text-right">Profile Settings</h5>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" placeholder="Full name" value=""></div>
                        <div class="col-md-12"><label class="labels">About you</label><textarea class="form-control" placeholder="Full name" value="" rows=7></textarea></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Company</label><input type="text" class="form-control" placeholder="enter company name you work for" value=""></div>
                        <div class="col-md-12"><label class="labels">Skills</label><input type="text" class="form-control" placeholder="enter your skills here" value=""></div>
                    </div>
                    <div class="row mt-3">
                        <label for="submission">Change Profile Picture:</label>
                        <input type="file" class="form-control-file" id="submission" name="submission" multiple="multiple">
                      </div>
                    <div class="row mt-3"> 
                        <a style="text-decoration: underline; color:blue;"><small>Change Password</small></a>
                    </div>
                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex justify-content-between align-items-center experience"><span>Edit Contact/Address Information</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Contact</span></div><br>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control" placeholder="enter phone number" value=""></div>
                    <div class="col-md-12"><label class="labels">City</label><input type="text" class="form-control" placeholder="enter street address" value=""></div>
                    <div class="col-md-12"><label class="labels">Zip</label><input type="text" class="form-control" placeholder="enter zip code here" value=""></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">State/Region</label><input type="text" class="form-control" value="" placeholder="state"></div>
                    <div class="col-md-6"><label class="labels">Country</label><input type="text" class="form-control" placeholder="country" value=""></div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</form>