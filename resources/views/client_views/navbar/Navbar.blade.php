<nav class="navbar navbar-expand-lg fixed-top ftco-navbar-light" id="navbar">
    <div class="container">
        @if(count($logo)<=0)
       <a class="navbar-brand align-items-center" href="/">
       Business
       </a>

       @elseif(count($logo)>0)
       @foreach($logo as $logo)
        <a class="navbar-brand align-items-center" href="/">
        <img src="{{asset('images/logos/'.$logo->logo)}}" alt="" style="width:120px;">
        </a>
        @endforeach
       @endif
       <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="fa fa-bars"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
             <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
             <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
             <li class="nav-item"><a class="nav-link" href="#pricing">Pricing</a></li>
             @include('client_views.navbar.Stub')
          </ul>
       </div>
    </div>
 </nav>
