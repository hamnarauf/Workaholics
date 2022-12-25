<section>
    <form action="/admin/categories" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="container rounded bg-white mt-5 mb-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex justify-content-between align-items-center experience"><span>Add a category</span></div><br>
                        <div class="row mt-2">
                            <div class="col-md-12"><label class="labels">Name:</label><input type="text" class="form-control" value="" name="name"></div>
                        </div>
                    </div>
                  <div class="mt-5 text-center" h><button class="btn btn-primary profile-button" type="submit">Add category</button></div>
              </div>
          </div>
          </div>
          </div>
      </form>
</section>