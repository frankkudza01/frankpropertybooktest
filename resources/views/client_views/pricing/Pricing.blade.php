<section class="ftco-section" id="pricing">
    <div class="container">
       <div class="row justify-content-center pb-5">
          <div class="col-md-7 text-center heading-section" data-aos="fade-up" data-aos-duration="1000">
            <a href="" style="border-radius:25px;width:200px;font-size:10px;" class="btn btn-white1">Pricing</a>
          </div>
       </div>
       <div class="row">
          @if(count($packages)<=0)
          <div class="col-md-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
             <div class="block-7">
                <div class="text-center">
                   <span class="excerpt d-block">
                    <a href="" style="border-radius:25px;width:200px;font-size:10px;" class="btn btn-white1">Starter</a>
                   </span><br>
                   <p style="margin-top:2%;">Far far away, behind the word mountains, behind the word mountains.</p>
                   <span class="price"><sup>$</sup> <span class="number">0</span><sub>/m<sub></span>

                    <a href="#" class="btn btn-primary btn-outline-primary d-block px-2 py-3">Start Free Trail</a>
                </div>

                <div class="p-4 px-lg-5">
                    <div>
                      <ol style="list-style: none;">
                          <li><i class="fa fa-check-circle-o" style="color:#1c57d0"></i> Cras justo odio</li>
                          <li><i class="fa fa-check-circle-o" style="color:#1c57d0"></i> Dapibus ac facilisis</li>
                          <li><i class="fa fa-solid fa-check-circle-o"></i> Morbi leo risus</li>
                          <li><i class="fa fa-solid fa-check-circle-o"></i> Excepteur sint occaecat veit</li>
                      </ol>
                    </div>
                 </div>
             </div>
          </div>

          @elseif(count($packages)>0)
          @foreach($packages->where('title','=','STARTER') as $starterpack)
          <div class="col-md-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
            <div class="block-7">
               <div class="text-center">
                  <span class="excerpt d-block">
                   <a href="" style="border-radius:25px;width:200px;font-size:10px;" class="btn btn-white1">{{$starterpack->title}}</a>
                  </span><br>
                  <p style="margin-top:2%;">{{$starterpack->notes}}</p>
                  <span class="price"><sup>$</sup> <span class="number">{{$starterpack->price}}</span><sub>/m<sub></span>

                   <a href="#" class="btn btn-primary btn-outline-primary d-block px-2 py-3">Start Free Trail</a>
               </div>

               @if($items->package_id==$prepack->id)
               <div class="p-4 px-lg-5">
                   <div>
                     <ol style="list-style: none;">
                        @foreach($items->where('status','=','Available') as $startitems)
                         <li><i class="fa fa-check-circle-o" style="color:#1c57d0"></i> {{$startitems->item_name}}</li>
                        @endforeach

                        @foreach($items->where('status','=','Not Available') as $startitems_not_available)
                        <li><i class="fa fa-check-circle-o"></i> {{$startitems_not_available->item_name}}</li>
                        @endforeach

                     </ol>
                   </div>
                </div>
                @endif
            </div>
         </div>
         @endforeach
          @endif

          @if(count($packages)<=0)
          <div class="col-md-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
             <div class="block-7">
                <div class="text-center">
                   <span class="excerpt d-block">
                    <a href="" style="border-radius:25px;width:200px;font-size:10px;" class="btn btn-primary">Exclusive</a>
                   </span><br>
                   <p style="margin-top:2%;">Far far away, behind the word mountains, behind the word mountains.</p>
                   <span class="price"><sup>$</sup> <span class="number">99</span><sub>/m<sub></span>

                    <a href="#" class="btn btn-primary btn-outline-primary d-block px-2 py-3">Start Free Trail</a>

                </div>


                <div class="p-4 px-lg-5">
                    <p>
                      <ul style="list-style: none;">
                          <li><i class="fa fa-check-circle-o" style="color:#1c57d0"></i> Cras justo odio</li>
                          <li><i class="fa fa-check-circle-o" style="color:#1c57d0"></i> Dapibus ac facilisis</li>
                          <li><i class="fa fa-solid fa-check-circle-o" style="color:#1c57d0"></i> Morbi leo risus</li>
                          <li><i class="fa fa-solid fa-check-circle-o"></i> Excepteur sint occaecat veit</li>
                      </ul>
                    </p>
                 </div>
             </div>
          </div>

          @elseif(count($packages)>0)
          @foreach($packages->where('title','=','EXCLUSIVE') as $exclupack)
          <div class="col-md-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
            <div class="block-7">
               <div class="text-center">
                  <span class="excerpt d-block">
                   <a href="" style="border-radius:25px;width:200px;font-size:10px;" class="btn btn-primary">{{$exclupack->title}}</a>
                  </span><br>
                  <p style="margin-top:2%;">{{$exclupack->notes}}</p>
                  <span class="price"><sup>$</sup> <span class="number">{{$exclupack->price}}</span><sub>/m<sub></span>

                   <a href="#" class="btn btn-primary btn-outline-primary d-block px-2 py-3">Start Free Trail</a>

               </div>

               @if($items->package_id==$prepack->id)
               <div class="p-4 px-lg-5">
                   <p>
                     <ul style="list-style: none;">
                        @foreach($items->where('status','=','Available') as $exeitems)
                         <li><i class="fa fa-check-circle-o" style="color:#1c57d0"></i> {{$exeitems->item_name}}</li>
                        @endforeach

                        @foreach($items->where('status','=','Not Available') as $exeitems_not_available)
                         <li><i class="fa fa-solid fa-check-circle-o"></i> {{$exeitems_not_available->item_name}}</li>
                        @endforeach
                     </ul>
                   </p>
                </div>
                @endif
            </div>
          </div>
          @endforeach
          @endif

          @if(count($packages)<=0)
          <div class="col-md-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
             <div class="block-7">
                <div class="text-center">
                   <span class="excerpt d-block">
                    <a href="" style="border-radius:25px;width:200px;font-size:10px;" class="btn btn-white1">Premium</a>
                   </span><br>
                   <p style="margin-top:2%;">Far far away, behind the word mountains, behind the word mountains.</p>
                   <span class="price"><sup>$</sup> <span class="number">150</span><sub>/m<sub></span>

                    <a href="#" class="btn btn-primary btn-outline-primary d-block px-2 py-3">Start Free Trail</a>


                </div>
                <div class="p-4 px-lg-5">
                    <p>
                      <ul style="list-style: none;">
                          <li><i class="fa fa-check-circle-o" style="color:#1c57d0"></i> Cras justo odio</li>
                          <li><i class="fa fa-check-circle-o" style="color:#1c57d0"></i> Dapibus ac facilisis</li>
                          <li><i class="fa fa-solid fa-check-circle-o" style="color:#1c57d0"></i> Morbi leo risus</li>
                          <li><i class="fa fa-solid fa-check-circle-o" style="color:#1c57d0"></i> Excepteur sint occaecat veit</li>
                      </ul>
                    </p>
                </div>
             </div>


          </div>

          @elseif(count($packages)>0)
          @foreach($packages->where('title','=','PREMIUM') as $prepack)
          <div class="col-md-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
            <div class="block-7">
               <div class="text-center">
                  <span class="excerpt d-block">
                   <a href="" style="border-radius:25px;width:200px;font-size:10px;" class="btn btn-white1">{{$prepack->title}}</a>
                  </span><br>
                  <p style="margin-top:2%;">{{$prepack->notes}}</p>
                  <span class="price"><sup>$</sup> <span class="number">{{$prepack->price}}</span><sub>/m<sub></span>

                   <a href="#" class="btn btn-primary btn-outline-primary d-block px-2 py-3">Start Free Trail</a>


               </div>
               @if($items->package_id==$prepack->id)
               <div class="p-4 px-lg-5">
                   <p>
                     <ul style="list-style: none;">
                        @foreach($items->where('status','=','Available') as $preitems)
                         <li><i class="fa fa-check-circle-o" style="color:#1c57d0"></i> {{$preitems->item_name}}</li>
                        @endforeach
                        @foreach($items->where('status','=','Not Available') as $preitems_not_available)
                         <li><i class="fa fa-check-circle-o"></i> {{$preitems_not_available->item_name}}</li>
                        @endforeach

                     </ul>
                   </p>
               </div>
               @endif
            </div>


         </div>
          @endforeach
          @endif

       </div>
    </div>
 </section>
