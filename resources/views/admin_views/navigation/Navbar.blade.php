        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">

                    <li class="{{ (request()->is('/Dashboard')) ? 'active' : '' }}"><a class="" href="/Dashboard" aria-expanded="false">
							<i class="flaticon-025-dashboard"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                    </li>

					<li class="{{ (request()->is('/About Us')) ? 'active' : '' }}"><a class="" href="/About Us" aria-expanded="false">
						<i class="flaticon-381-idea"></i>
						<span class="nav-text">About Us</span>
					    </a>
				    </li>
                    <hr>

                    <li class="{{ (request()->is('/Logo Config')) ? 'active' : '' }}"><a class="" href="/Logo Config" aria-expanded="false">
							<i class="flaticon-381-bookmark-1"></i>
							<span class="nav-text">Navigation</span>
						</a>
                    </li>


                    <li class="{{ (request()->is('/Packages')) ? 'active' : '' }}"><a href="/Packages" aria-expanded="false">
						<i class="flaticon-381-folder-1"></i>
							<span class="nav-text">Pricing Packages</span>
						</a>

                    </li>



                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="flaticon-381-lock-2"></i>   Logout
                        </a>
					</li>

                </ul>

				<div class="copyright">
					<p><strong> Kudzai Frank Mulilima</strong> © 2022 All Rights Reserved</p>
				</div>
			</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
