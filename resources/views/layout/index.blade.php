@extends('layout.main');

@section('content');

         <main role="main">
            @foreach($abcs as $item)
            <div class="start-content">
               <div class="container">
                  <div class="row">
                     
                     <div class="col-12 col-md-10 col-lg-6" data-aos="fade-right">
                        <div class="d-md-block">
                           <div class="__site-name">{{$item['name_one']}}</div>
                        </div>
                        <h3>
                           {{$item['des_one']}}            
                        </h3>
                        <div class="spacer py-1 py-sm-2"></div>
                        <div class="d-sm-table">
                           <div class="d-sm-table-cell  pb-5 pb-sm-0 pr-sm-8 pr-md-10">
                              <a class="custom-btn custom-btn--medium custom-btn--style-2" href="register23b8.html?trial=start"> Start 7 days trial</a>
                           </div>
                        </div>
                     </div>
                     
                     <div class="col-12 col-md-10 col-lg-6 xsmt-10" data-aos="fade-left">
                        <img class="pull-right hero-imgi mt--105" src="{{$item['gallery_one']}} " alt="Hero Image" />
                     </div>
                  </div>
               </div>
            </div>
            <!-- start main -->
            <main role="main">
               <!-- start section -->
               <section class="section section--light-blue-bg">
                  <div class="container">
                     <div class="section-heading section-heading--center">
                        <h3 class="__title mb-0">{{$item['name_two']}}</h3>
                        <h4 class="mt-1"><span>{{$item['des_two']}}</span></h4>
                     </div>
                     <div class="spacer py-6"></div>
                     <div class="row">
                        <div class="col-12">
                           <!-- start steps -->
                           <div class="steps steps--s1">
                              <div class="__inner">
                                 <div class="row justify-content-center justify-content-xl-around">
                                    <!-- start item -->
                                    <div class="col-12 col-sm-9 col-md-4 col-xl-3">
                                       <div class="__item">
                                          <div class="mb-md-8">
                                             <span class="__num">
                                             <img class="pull-rights" src="{{$item['gallery_a']}}" alt="demo" />
                                             </span>
                                          </div>
                                          <h4 class="__title">{{$item['name_a']}}</h4>
                                          <p>
                                             {{$item['des_a']}}                                       
                                          </p>
                                       </div>
                                    </div>
                                    <!-- end item -->
                                    <!-- start item -->
                                    <div class="col-12 col-sm-9 col-md-4 col-xl-3">
                                       <div class="__item">
                                          <div class="mb-md-8">
                                             <span class="__num">
                                             <img class="pull-rights" src="{{$item['gallery_b']}}" alt="demo" />
                                             </span>
                                          </div>
                                          <h4 class="__title">{{$item['name_b']}}</h4>
                                          <p>
                                             {{$item['des_b']}}                                        
                                          </p>
                                       </div>
                                    </div>
                                    <!-- end item -->
                                    <!-- start item -->
                                    <div class="col-12 col-sm-9 col-md-4 col-xl-3">
                                       <div class="__item">
                                          <div class="mb-md-8">
                                             <span class="__num">
                                             <img class="pull-rights" src="{{$item['gallery_c']}}" alt="demo" />
                                             </span>
                                          </div>
                                          <h4 class="__title">{{$item['name_c']}}</h4>
                                          <p>
                                             {{$item['des_c']}}                                       
                                          </p>
                                       </div>
                                    </div>
                                    <!-- end item -->
                                 </div>
                              </div>
                           </div>
                           <!-- end steps -->
                        </div>
                     </div>
                  </div>
               </section>
               <!-- end section -->
               <section class="section">
                  <div class="container">
                     <div class="section-heading section-heading--center">
                        <h3 class="__title">{{$item['h_two']}}</h3>
                     </div>
                     <div class="row  align-items-md-center" data-aos="fade-left">
                        <div class="col-12 col-lg-6">
                           <div class="section-heading">
                              <h3 class="__title">{{$item['name_three']}}</h3>
                           </div>
                           <div class="spacer py-2"></div>
                           <div>
                              <p class="c-555">
                                 {{$item['des_three']}}
                              </p>
                           </div>
                        </div>
                        <div class="spacer py-4 d-lg-none"></div>
                        <div class="col-12 col-lg-6  text-center text-lg-right">
                           <img class="img-fluid" width="520" height="507" src="{{$item['gallery_three']}}" alt="demo" />
                        </div>
                     </div>
                     <div class="row flex-lg-row-reverse align-items-md-center" data-aos="fade-right">
                        <div class="col-12 col-lg-6">
                           <div class="section-heading">
                              <h3 class="__title">{{$item['name_four']}}</h3>
                           </div>
                           <div class="spacer py-2"></div>
                           <div>
                              <p class="c-555">
                                 {{$item['des_four']}}
                              </p>
                           </div>
                        </div>
                        <div class="spacer py-4 d-lg-none"></div>
                        <div class="col-12 col-lg-6  text-center text-lg-left">
                           <img class="img-fluid" width="520" height="507" src="{{$item['gallery_four']}}" alt="demo" />
                        </div>
                     </div>
                     <div class="row  align-items-md-center" data-aos="fade-left">
                        <div class="col-12 col-lg-6">
                           <div class="section-heading">
                              <h3 class="__title">{{$item['name_five']}}</h3>
                           </div>
                           <div class="spacer py-2"></div>
                           <div>
                              <p class="c-555">
                                 {{$item['des_five']}}
                              </p>
                           </div>
                        </div>
                        <div class="spacer py-4 d-lg-none"></div>
                        <div class="col-12 col-lg-6  text-center text-lg-right">
                           <img class="img-fluid" width="520" height="507" src="{{$item['gallery_five']}}" alt="demo" />
                        </div>
                     </div>
                  </div>
               </section>
               <!-- start testimonials section -->
               <section class="section section--light-blue-bg">
                  <div class="container">
                     <div class="section-heading text-center">
                        <h2 class="__title">Clients Say <span> MaxInvoices</span></h2>
                     </div>
                     <div class="spacer py-4"></div>
                     <div class="row">
                        <div class="col-12">
                           <!-- start review -->
                           <div class="review review--s1 review--slider">
                              <div class="js-slick"
                                 data-slick='{
                                 "autoplay": true,
                                 "infinite": false,
                                 "arrows": true,
                                 "dots": false,
                                 "speed": 1200
                                 }'>
                                 <div class="review__item">
                                    <figure class="review__item__author-image">
                                       <img width="100" height="100" src="uploads/thumbnail/damiano_online_invoicing_software_user_thumb-80x80.png" alt="Image" />
                                    </figure>
                                    <div>
                                       <span class="review__item__author-name h4 mb-1">Oz Bayldon</span>
                                       <p>
                                          I am glad different samples and types of invoices are already made and ready to&#8230;                                            
                                       </p>
                                    </div>
                                 </div>
                                 <div class="review__item">
                                    <figure class="review__item__author-image">
                                       <img width="100" height="100" src="uploads/thumbnail/leonardo_freelance_designer_invoicing_customer_thumb-150x150.png" alt="Image" />
                                    </figure>
                                    <div>
                                       <span class="review__item__author-name h4 mb-1">Michael Goodwin</span>
                                       <p>
                                          Thank you for checking in with me. I am very pleased with the invoice system so&#8230;                                            
                                       </p>
                                    </div>
                                 </div>
                                 <div class="review__item">
                                    <figure class="review__item__author-image">
                                       <img width="100" height="100" src="uploads/thumbnail/james_happy_invoicing_customer1_thumb-150x150.png" alt="Image" />
                                    </figure>
                                    <div>
                                       <span class="review__item__author-name h4 mb-1">James Mcleod</span>
                                       <p>
                                          I like it very much! I am just starting out as a new company so I think it will&#8230;                                            
                                       </p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- end review -->
                        </div>
                     </div>
                  </div>
               </section>
               <!-- end section -->
               <!-- start blog section -->
               <!-- end section -->
            </main>
            <!-- end main -->    
         @endforeach
         </main>

@endsection