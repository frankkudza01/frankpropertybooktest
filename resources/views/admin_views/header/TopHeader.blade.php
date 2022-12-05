        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
							<div class="input-group search-area d-xl-inline-flex d-none">
								<button class="input-group-text"><i class="flaticon-381-search-2 text-primary"></i></button>
								<input type="text" class="form-control" placeholder="Search here...">
							</div>
                        </div>
                        <ul class="navbar-nav header-right">

                            <li class="nav-item">
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="flaticon-381-lock-2"></i>   Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>

                            </li>

                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
									<div class="header-info me-3">
										<span class="fs-16 font-w600 ">{{ Auth::user()->name }}</span>
										<small class="text-end fs-14 font-w400">Super Admin</small>
									</div>
                                    <img src="{{asset('user.png')}}" width="20" alt=""/>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">

                                    <a href="{{ route('logout') }}" class="dropdown-item ai-icon" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                        <svg id="icon-logout" xmlns="" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ms-2">Logout </span>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
				</nav>
			</div>
		</div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->
