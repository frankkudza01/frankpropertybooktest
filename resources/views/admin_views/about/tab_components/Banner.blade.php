<div class="tab-pane fade" id="banner" role="tabpanel">

    <div class="row" style="margin-top:2%;">

        <div class="col-md-12">
            @if(count($themeImage)<=0)
            <a data-bs-target="#addTheme" data-bs-toggle="modal" class="btn btn-primary btn-sm btn-block" style="width:30%;margin-bottom:2%;">Theme Image</a>
            @include('admin_views.about.AddTheme')
            @endif

        </div>

        @if(count($themeImage)>0)
        @foreach($themeImage as $themeImage)
            @include('admin_views.about.UpdateTheme')
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="event-img">

                            <img style="height:300px;" src="{{asset('images/themes/'.$themeImage->image)}}" class="img-fluid"  alt="">
                            <div class="event-content" style="margin-top:2%">
                                <a href="javascript:void(0);" class="btn btn-success btn-sm text-white" data-bs-target="#updateTheme{{$themeImage->id}}" data-bs-toggle="modal"><i class="flaticon-381-pencil"></i> Update</a>
                                @include('admin_views.about.UpdateTheme')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        @elseif (count($themeImage)<=0)
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="event-img">

                        <div class="event-content">
                            <h4 class="fs-28 font-w200  mt-3" style="color:#1c57d0">No Record Found Please Add Theme Image</h4>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        @endif

    </div>
</div>
