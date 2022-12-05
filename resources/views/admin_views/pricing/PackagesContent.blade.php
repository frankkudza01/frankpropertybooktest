        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">

                <div class="row">
                    <div class="col-md-3">
                        <div class="mail-list rounded" style="margin-bottom:3%;">
                            <a href="" data-bs-target="#package" data-bs-toggle="modal" class="list-group-item active"><i
                                    class="fa fa-plus font-18 align-middle me-2"></i> Package <span
                                    class="badge badge-primary badge-sm float-end"></span> </a>
                                @include('admin_views.pricing.AddPackage')

                        </div>
                    </div>

                </div>
				<div class="row">
					<div class="col-xl-12">
						<div class="card">
							<div class="card-body px-4 py-3 py-md-2">
								<div class="row align-items-center">
									<div class="col-sm-12 col-md-7">
										<ul class="nav nav-pills review-tab">
											<li class="nav-item">
												<a href="" class="nav-link active" data-bs-toggle="tab" aria-expanded="false">All Packages</a>
											</li>

										</ul>
									</div>

								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-12">
						<div class="tab-content">
							<div id="navpills-1" class="tab-pane fade show active">
								<div class="table-responsive rounded table-hover fs-14">
									<table class="table mb-4 dataTablesCard card-table p-0  review-table fs-14" id="example6">
										<thead>
											<tr>

												<th style="width:250px;">Package Title</th>
												<th class="d-none d-lg-table-cell">Price</th>
                                                <th class="d-none d-lg-table-cell">Trail Duration</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
                                            @if(count($packages)>0)
											@foreach($packages as $packages)
											<tr>

												<td>
													<div class="media align-items-center tbl-img">

														<div class="media-body">
															<h4 class="font-w300 mb-1 ">{{$packages->title}}</h4>
															<span>{{$packages->title}} Package</span>
														</div>
													</div>
												</td>
												<td class="d-none d-lg-table-cell">${{$packages->price}}</td>
                                                <td class="d-none d-lg-table-cell">{{$packages->trail}} Days</td>

												<td>
													<div class="d-flex">
														<a data-bs-toggle="modal" data-bs-target="#prop{{$packages->id}}" class="btn btn-outline-primary btn-rounded btn-sm ms-2 px-4"><i class="fa fa-plus"></i> Property</a>
                                                        @include('admin_views.pricing.Prop')
                                                        <a data-bs-toggle="modal" data-bs-target="#details{{$packages->id}}" class="btn btn-outline-primary btn-rounded btn-sm ms-2 px-4"><i class="fa fa-eye"></i> Details</a>
                                                        @include('admin_views.pricing.Details')
													</div>
												</td>
											</tr>
                                            @endforeach

                                            @elseif(count($packages)<=0)
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="event-img">

                                                            <div class="event-content">
                                                                <h4 class="fs-28 font-w200  mt-3" style="color:#1c57d0">No Record Found Please Add Packages</h4>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            @endif


										</tbody>
									</table>
								</div>
							</div>

						</div>
					</div>
				</div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
