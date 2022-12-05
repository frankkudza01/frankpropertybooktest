<div class="tab-pane fade show" id="history" role="tabpanel">

    <div class="row" style="margin-top:2%;">

        <div class="col-md-12">
            @if(count($history)<=0)
            <a data-bs-target="#addHistory" data-bs-toggle="modal" class="btn btn-primary btn-sm btn-block" style="width:30%;margin-bottom:2%;">+ History</a>
            @endif
            @include('admin_views.about.tab_components.add.AddHistory')

        </div>

        @if(count($history)>0)
        @foreach($history as $history)
        <a data-bs-target="#updateHistory{{$history->id}}" data-bs-toggle="modal" class="btn btn-primary btn-sm btn-block" style="width:30%;margin-bottom:2%;"><i class="fa fa-edit"></i> Update</a>
        @include('admin_views.about.tab_components.update.UpdateHistory')
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="event-img">

                        <div class="event-content">

                            <p class="fs-16  font-w200 mt-3  mb-4">
                               {{$history->history}}
                            </p>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-lg-6 col-sm-6 col-xxl-6 mb-3">
                            <div class="media event-card p-3 rounded align-items-center">

                                <div class="media-body event-size">
                                    <span class="fs-14 d-block mb-1 text-primary">Date</span>
                                    <span class="fs-18 font-w200 event-size-1 ">{{\Carbon\Carbon::parse($history->created_at)->format('d M Y')}}</span>
                                </div>


                            </div>
                            <a href="javascript:void(0);" class="btn btn-danger btn-sm text-white" style="margin-top:2%"><i class="fa fa-refresh"></i> Deactivate</a>
                            <a href="javascript:void(0);" data-bs-target="#event" data-bs-toggle="modal" class="btn btn-primary btn-sm text-white" style="margin-top:2%"><i class="fa fa-paperclip"></i> Event</a>
                            @include('admin_views.about.tab_components.attach_events.AddEvent')
                            <hr>
                            <div class="row" style="margin-top:2%">
                                <h4>Events</h4>
                                @foreach($events as $value)
                                <div style="margin-top: 2%;" class="media event-card p-3 rounded align-items-center">
                                    <div class="col-md-12">
                                        <div class="media-body event-size">
                                            <span class="fs-14 d-block mb-1 text-primary">{{$value->event_title}}</span>
                                            <span class="fs-18 font-w200 event-size-1 ">{{\Carbon\Carbon::parse($value->date)->format('d M Y')}}</span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

        @elseif (count($history)<=0)

            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="event-img">

                            <div class="event-content">
                                <h4 class="fs-28 font-w200  mt-3" style="color:#1c57d0">No Record Found Please Add History</h4>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        @endif
    </div>

    </div>
</div>
