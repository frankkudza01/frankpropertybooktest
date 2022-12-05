
<div class="modal fade" id="package" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background-color:#214e95;color:white;">
          <h5 class="modal-title" style="color:white;" id="exampleModalLabel">+ Package</h5>
          <button type="button" style="color:white;" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <div class="compose-content">
              <form method="POST" action="{{route('/Add/Package')}}" class="needs-validation" novalidate="" enctype="multipart/form-data">
              {{ csrf_field() }}
                  <div class="mb-3">
                      <select type="text" class="form-control bg-transparent" name="title" placeholder="Package Title..">
                            <option>STARTER</option>
                            <option>EXCLUSIVE</option>
                            <option>PREMIUM</option>
                      </select>
                  </div>

                  <div class="mb-3">
                    <input type="text" class="form-control bg-transparent" name="price" placeholder="Package Price(0.00)">
                  </div>

                  <div class="mb-3">
                      <textarea class="form-control bg-transparent" id="summernote" name="notes" rows="10" placeholder="Enter text ..." style="min-height:50px;height:100%;width:100%;"></textarea>
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



