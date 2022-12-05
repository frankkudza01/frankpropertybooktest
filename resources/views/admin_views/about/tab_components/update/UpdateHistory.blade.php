
<div class="modal fade" id="updateHistory{{$history->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background-color:#214e95;color:white;">
          <h5 class="modal-title" style="color:white;" id="exampleModalLabel"><i class="fa fa-edit"></i> History</h5>
          <button type="button" style="color:white;" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <div class="compose-content">
              <form method="POST" action="{{ route('/Update/History', $history->id) }}}}" class="needs-validation" novalidate="" enctype="multipart/form-data">
              {{ csrf_field() }}

                  <div class="mb-3">
                      <textarea class="form-control bg-transparent" id="summernote" name="history" rows="15" placeholder="Enter Vision Here ..." style="min-height:50px;height:100%;width:100%;">{{$history->history}}</textarea>
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



