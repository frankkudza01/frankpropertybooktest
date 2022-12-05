
<div class="modal fade" id="addTheme" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background-color:#214e95;color:white;">
          <h5 class="modal-title" style="color:white;" id="exampleModalLabel">+ Theme</h5>
          <button type="button" style="color:white;" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
            <div class="compose-content">
                <form method="POST" action="{{route('/Add/ThemeImage')}}" class="needs-validation" novalidate="" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="mb-3 imgUp">
                    <div class="imagePreview"></div>
                </div>

                <div class="input-group mb-3">
                    <div class="form-file">
                        <input type="file" name="image" class="form-file-input form-control">
                    </div>
                    <span class="input-group-text">Upload Theme</span>
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



