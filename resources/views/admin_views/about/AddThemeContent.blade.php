
<div class="modal fade" id="content" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background-color:#214e95;color:white;">
          <h5 class="modal-title" style="color:white;" id="exampleModalLabel">Banner Config</h5>
          <button type="button" style="color:white;" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <div class="compose-content">
              <form method="POST" action="{{route('/Add/Theme')}}" class="needs-validation" novalidate="" enctype="multipart/form-data">
              {{ csrf_field() }}
                  <div class="mb-3">
                      <input type="text" class="form-control bg-transparent" name="theme_title" placeholder="Banner Title" required>
                  </div>

                  <div class="mb-3">
                      <select type="text" class="form-control bg-transparent" name="category" required>
                          <option>Basic Website</option>
                          <option>Corporate Website</option>
                          <option>Other</option>

                      </select>
                  </div>


                  <div class="mb-3">
                      <textarea class="form-control bg-transparent" id="summernote" name="tagline" rows="15" placeholder="Enter Tagline Here ..." style="min-height:50px;height:100%;width:100%;" required></textarea>
                  </div>

                  <div class="modal-footer">
                      <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
              </form>



          </div>
        </div>

      </div>
    </div>
  </div>



