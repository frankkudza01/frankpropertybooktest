
<div class="modal fade" id="details{{$packages->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background-color:#214e95;color:white;">
          <h5 class="modal-title" style="color:white;" id="exampleModalLabel">Details</h5>
          <button type="button" style="color:white;" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <div class="compose-content">
              <form>

                @foreach($items->where('package_id','=',$packages->id) as $items)
                  <div class="mb-3">
                      <input type="text" class="form-control bg-transparent" name="event_title" placeholder="{{$items->item_name}}" readonly>
                  </div>


                  <div class="mb-3">
                    <a href="" class="btn btn-sm btn-primary">{{$items->status}}</a>
                  </div><hr>
                @endforeach

                  <div class="mb-3">
                      <p>{{$packages->notes}}</p>
                  </div>


              </form>



          </div>
        </div>

      </div>
    </div>
  </div>



