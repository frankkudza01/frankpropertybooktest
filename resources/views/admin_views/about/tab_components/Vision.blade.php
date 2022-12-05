<div class="tab-pane fade" id="vision" role="tabpanel">

    <div class="row" style="margin-top:2%;">

        <div class="col-md-12">
            @if(count($vision)<=0)
            <a data-bs-target="#addVision" data-bs-toggle="modal" class="btn btn-primary btn-sm btn-block" style="width:30%;margin-bottom:2%;">+ Vision</a>
            @include('admin_views.about.tab_components.add.AddVision')
            @endif

        </div>

        @if(count($vision)>0)
        @foreach($vision as $vision)
        <a data-bs-target="#updateVision{{$vision->id}}" data-bs-toggle="modal" class="btn btn-primary btn-sm btn-block" style="width:30%;margin-bottom:2%;"><i class="fa fa-edit"></i> Update</a>
        @include('admin_views.about.tab_components.update.UpdateVision')
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="event-img">

                        <div class="event-content">
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm text-white">

                                {{$vision->status}}</a>
                            <p class="fs-16  font-w200 mt-3  mb-4">
                                {{$vision->vision}}
                            </p>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-lg-6 col-sm-6 col-xxl-6 mb-3">
                            <a href="javascript:void(0);" class="btn btn-danger btn-sm text-white" style="margin-top:2%"><i class="fa fa-refresh"></i> Deactivate</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

        @elseif (count($vision)<=0)

            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="event-img">

                            <div class="event-content">
                                <h4 class="fs-28 font-w200  mt-3" style="color:#1c57d0">No Record Found Please Add Vision</h4>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        @endif


    </div>
</div>
