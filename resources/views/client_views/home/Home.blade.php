<section class="hero-wrap" id="home" style="background-color: #1c57d0;">
    <div class="overlay"></div>
    @if(count($theme)<=0)
    <div class="container">
       <div class="row no-gutters slider-text align-items-center">
          <div class="col-md-7">
             <div class="text mt-5" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                <h1 class="mb-4">Corporate Website</h1>
                <div class="w-md-75 w-100">
                   <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                   <p><a href="#" class="btn btn-white p-4 py-3">Get Started <span class="ion-ios-arrow-round-forward"></span></a>
                    <a href="#" class="btn"><i class="fa fa-play-circle-o fa-4x"></i></a> Watch Intro</p>

                </div>
             </div>
          </div>

       </div>
    </div>

    @elseif(count($theme)>0)
    @foreach($theme as $theme)
    <div class="container">
        <div class="row no-gutters g-xl-5 slider-text align-items-center">
           <div class="col-md-6">
              <div class="text mt-5" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                 <h1 class="mb-4">{{$theme->category}}</h1>
                 <div class="w-md-75 w-100">
                    <p class="mb-4">{{$theme->tagline}}</p>
                    <p><a href="#" class="btn btn-white p-4 py-3">Get Started <span class="ion-ios-arrow-round-forward"></span></a>
                     <a href="#" class="btn"><i class="fa fa-play-circle-o fa-4x"></i></a> Watch Intro</p>

                 </div>

              </div>
           </div>

           <div class="col-md-6 d-flex align-items-center" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                <div class="img img-about" style="background-image: url(im.png);"></div>
           </div>

        </div>

     </div>
     @endforeach
    @endif
 </section>
