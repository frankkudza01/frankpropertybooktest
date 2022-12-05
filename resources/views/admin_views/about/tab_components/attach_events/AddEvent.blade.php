
<div class="modal fade" id="event" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background-color:#214e95;color:white;">
          <h5 class="modal-title" style="color:white;" id="exampleModalLabel">Attach History Event</h5>
          <button type="button" style="color:white;" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <div class="compose-content">
              <form method="POST" action="{{route('/Add/Event')}}" class="needs-validation" novalidate="" enctype="multipart/form-data">
              {{ csrf_field() }}

                  <div class="mb-3">
                      <input type="text" class="form-control bg-transparent" name="history_id" placeholder="{{$history->id}}" value="{{$history->id}}" readonly style="display:none">
                  </div>
                  <div class="mb-3">
                      <input type="text" class="form-control bg-transparent" name="event_title" placeholder="Event Title..">
                  </div>


                  <div class="mb-3">
                      <input type="date" class="form-control bg-transparent" name="date" placeholder="Event Title..">
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



