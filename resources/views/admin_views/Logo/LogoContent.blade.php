<div class="content-body">
    <div class="container-fluid">

        <div class="tab-content">

            <!---second Tab--->
            <div class="tab-pane fade show active" id="theme" role="tabpanel">

                <div class="row" style="margin-top:2%;">
                    @if(count($logo)<=0)
                    <div class="col-md-12">
                        <a data-bs-target="#addLogo" data-bs-toggle="modal" class="btn btn-primary btn-sm btn-block" style="width:30%;margin-bottom:2%;">Add Logo</a>
                        @include('admin_views.Logo.AddLogo')
                    </div>
                    @endif

                    @if(count($logo)>0)
                    @foreach($logo as $logo)
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="event-img">

                                        <img style="height:30%;" src="{{asset('images/logos/'.$logo->logo)}}" class="img-fluid"  alt="">
                                        <div class="event-content" style="margin-top:2%">
                                            <a href="javascript:void(0);" class="btn btn-success btn-sm text-white" data-bs-target="#updateLogo{{$logo->id}}" data-bs-toggle="modal"><i class="flaticon-381-pencil"></i> Update</a>
                                            @include('admin_views.Logo.UpdateLogo')
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    @elseif(count($logo)<=0)
                    <div class="col-md-12">
                        <div class="card">
    <div class="card-body">
                                <div class="event-img">

                                    <div class="event-content">
                                        <h4 class="fs-28 font-w200  mt-3" style="color:#1c57d0">No Record Found Please Add Logo</h4>
            </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>




        </div>



    </div>
</div>
<!--**********************************
    Content body end
***********************************-->
