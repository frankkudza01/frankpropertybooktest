<div class="tab-pane fade show active" id="theme" role="tabpanel">

    <div class="row" style="margin-top:2%;">

        <div class="col-md-12">
            @if(count($themes)<=0)
            <a data-bs-target="#content" data-bs-toggle="modal" class="btn btn-primary btn-sm btn-block" style="width:30%;margin-bottom:2%;">Add Theme</a>
            @include('admin_views.about.AddThemeContent')
            @endif

        </div>

        @if(count($themes)>0)
            @foreach($themes as $themes)
                <a data-bs-target="#updateContent{{$themes->id}}"  data-id="{{ $themes->id }}" data-bs-toggle="modal" class="btn btn-success btn-sm btn-block" style="width:30%;margin-bottom:2%;">Update Theme</a>
            @include('admin_views.about.UpdateThemeContent')
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="event-img">

                            <div class="event-content">
                                <h4 class="fs-28 font-w200  mt-3">{{$themes->theme_title}}</h4>
                                <a href="javascript:void(0);" class="btn btn-primary btn-sm text-white">

                                    {{$themes->status}}</a>
                                <p class="fs-16  font-w200 mt-3  mb-4">
                                    {{$themes->tagline}}
                                </p>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-lg-6 col-sm-6 col-xxl-6 mb-3">
                                <div class="media event-card p-3 rounded align-items-center">

                                    <div class="media-body event-size">
                                        <span class="fs-14 d-block mb-1 text-primary">Date</span>
                                        <span class="fs-18 font-w200 event-size-1 ">{{\Carbon\Carbon::parse($themes->created_at)->format('d/m/Y')}}</span>

                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        @elseif (count($themes)<=0)

            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="event-img">

                            <div class="event-content">
                                <h4 class="fs-28 font-w200  mt-3" style="color:#1c57d0">No Record Found Please Add Theme</h4>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
