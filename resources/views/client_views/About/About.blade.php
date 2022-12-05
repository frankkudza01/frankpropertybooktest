<section class="ftco-section" id="about">
    <div class="container-xl">
       <div class="row g-xl-5">

          <div class="col-md-6 d-flex align-items-center" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
             <div class="img img-about" style="background-image: url(im.png);"></div>
          </div>
          <div class="col-md-6 heading-section" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
             <div class="my-5">
                <span><h4><i class="fa fa-minus fa-1x" style="color:#1c57d0;font-size:25px;"></i> Our Story</h4></span>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                   <li class="nav-item" role="presentation">
                      <a class="nav-link active" id="aboutme-tab" data-bs-toggle="tab" href="#aboutme" role="tab" aria-controls="aboutme" aria-selected="true">Who We Are</a>
                   </li>
                   <li class="nav-item" role="presentation">
                      <a class="nav-link" id="skills-tab" data-bs-toggle="tab" href="#skills" role="tab" aria-controls="skills" aria-selected="false">Our Vision</a>
                   </li>
                   <li class="nav-item" role="presentation">
                      <a class="nav-link" id="experience-tab" data-bs-toggle="tab" href="#experience" role="tab" aria-controls="experience" aria-selected="false">Our History</a>
                   </li>
                </ul>
                <div class="tab-content py-4" id="myTabContent">
                   <div class="tab-pane fade show active" id="aboutme" role="tabpanel" aria-labelledby="aboutme-tab">
                      <h2 style="font-size:28px;" class="mb-4">Our team comes with the experience and knowledge</h2>
                      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>

                      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                   </div>
                   <div class="tab-pane fade" id="skills" role="tabpanel" aria-labelledby="skills-tab">
                      <h2 class="mb-4">Vision</h2>

                      @if(count($vision)<=0)
                      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>

                      @elseif(count($vision)>0)
                      <p>{{$vision->vision}}</p>
                      @endif
                   </div>
                   <div class="tab-pane fade" id="experience" role="tabpanel" aria-labelledby="experience-tab">
                    <h2 class="mb-4">History</h2>
                    @if(count($history)<=0)
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    @elseif(count($history)>0)
                    @foreach($history as $history)
                      <div class="row">
                         <div class="col-md-12">
                            <p style="margin-top:2%;margin-bottom:2%;">{{$history->history}}</p>
                            @foreach($events as $events)
                            <div class="resume-wrap d-flex align-item-stretch" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                               <div class="w-100">
                                  <h2>{{$events->event_title}}</h2>
                                  <span class="date">{{\Carbon\Carbon::parse($events->date)->format('d M Y')}}</span> <span class="position"><i class="ion-ios-pin me-2"></i>Google Inc.</span>

                               </div>
                            </div>
                            @endforeach

                         </div>
                      </div>
                    @endforeach
                    @endif
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
