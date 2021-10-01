@extends('layouts.welcome')

@section('content')
    <div id="service" class="back_box">
         <div class="container-fluid">
            <div class="row">
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 padd_rile">
                  <div class="three_box">
                     <span>01</span>
                     <h3>Tile & Grout</h3>
                     <p>It is a long established fact that a reader will be distracted by the readable content of a page </p>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 padding_l">
                  <div class="three_box yellow">
                     <span class="yellow" >02</span>
                     <h3>Carpet Cleaning</h3>
                     <p>It is a long established fact that a reader will be distracted by the readable content of a page </p>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 padd_ri">
                  <div class="three_box">
                     <span>03</span>
                     <h3>Laundry Service</h3>
                     <p>It is a long established fact that a reader will be distracted by the readable content of a page </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end three box -->
      <!-- wellcome  -->
      <div id="clean" class="wellcome">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>WELCOME TO Better clean</h2>
                     <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of Contrary to</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                  <div class="wellcome-box">
                     <figure><img src="{{asset('better-clean/images/wellcome1.jpg')}}" alt="#" /></figure>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                  <div class="wellcome-box">
                     <figure><img src="{{asset('better-clean/images/wellcome2.jpg')}}" alt="#" /></figure>
                  </div>
               </div>
               <div class="col-md-12">
                  <a class="read_more" href="#">Read More</a>
               </div>
            </div>
         </div>
      </div>
      <!-- end wellcome -->
      <!-- ourwork -->
      <div id="ourwork" class="ourwork">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>OUR WORK PROCESS</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div id="main_slider1" class="carousel slide banner-main3" data-ride="carousel">
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="row d_flex">
                                    <div class="col-md-3">
                                       <div class="our">
                                          <figure><img src="{{ asset('better-clean/images/our.png') }}" alt="#"/></figure>
                                          <p>Richard McClintock, a Latin professor at Hampden-Sydney College in  </p>
                                       </div>
                                    </div>
                                    <div class="col-md-5">
                                       <div class="our">
                                          <figure><img src="{{ asset('better-clean/images/our3.png') }}" alt="#"/></figure>
                                          <p>Richard McClintock, a Latin professor at Hampden-Sydney College in  </p>
                                       </div>
                                    </div>
                                    <div class="col-md-3">
                                       <div class="our">
                                          <figure><img src="{{ asset('better-clean/images/our2.png') }}" alt="#"/></figure>
                                          <p>Richard McClintock, a Latin professor at Hampden-Sydney College in  </p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="row d_flex">
                                    <div class="col-md-3">
                                       <div class="our">
                                          <figure><img src="{{ asset('better-clean/images/our.png') }}" alt="#"/></figure>
                                          <p>Richard McClintock, a Latin professor at Hampden-Sydney College in  </p>
                                       </div>
                                    </div>
                                    <div class="col-md-5">
                                       <div class="our">
                                          <figure><img src="{{ asset('better-clean/images/our3.png') }}" alt="#"/></figure>
                                          <p>Richard McClintock, a Latin professor at Hampden-Sydney College in  </p>
                                       </div>
                                    </div>
                                    <div class="col-md-3">
                                       <div class="our">
                                          <figure><img src="{{ asset('better-clean/images/our2.png') }}" alt="#"/></figure>
                                          <p>Richard McClintock, a Latin professor at Hampden-Sydney College in  </p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="row d_flex">
                                    <div class="col-md-3">
                                       <div class="our">
                                          <figure><img src="{{ asset('better-clean/images/our.png') }}" alt="#"/></figure>
                                          <p>Richard McClintock, a Latin professor at Hampden-Sydney College in  </p>
                                       </div>
                                    </div>
                                    <div class="col-md-5">
                                       <div class="our">
                                          <figure><img src="{{ asset('better-clean/images/our3.png') }}" alt="#"/></figure>
                                          <p>Richard McClintock, a Latin professor at Hampden-Sydney College in  </p>
                                       </div>
                                    </div>
                                    <div class="col-md-3">
                                       <div class="our">
                                          <figure><img src="{{ asset('better-clean/images/our2.png') }}" alt="#"/></figure>
                                          <p>Richard McClintock, a Latin professor at Hampden-Sydney College in  </p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#main_slider1" role="button" data-slide="prev"> <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                     <a class="carousel-control-next" href="#main_slider1" role="button" data-slide="next"> <i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end ourwork -->
      <!-- Better -->
      <div class="Better">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="Better_clean">
                     <figure><img src="{{ asset('better-clean/images/cac.png') }}" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end Better -->
      <!-- review -->
      <div id="review" class="review">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>customer review</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div id="main_slider" class="carousel slide banner-main2" data-ride="carousel">
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container">
                              <div class="carousel-caption">
                                 <img src="{{ asset('better-clean/images/rev.jpg') }}" alt="#"/>
                                 <i><img src="{{ asset('better-clean/images/2.png') }}" alt="#"/></i>
                                 <span>Luka duge</span>
                                 <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sureThere are many variations of passages of Lorem Ipsum available, but the majorityhave suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure</p>
                                 <a href="#">Read More</a>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <img src="{{ asset('better-clean/images/rev.jpg') }}" alt="#"/>
                                 <i><img src="{{ asset('better-clean/images/2.png') }}" alt="#"/></i>
                                 <span>Luka duge</span>
                                 <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sureThere are many variations of passages of Lorem Ipsum available, but the majorityhave suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure</p>
                                 <a href="#">Read More</a>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <img src="{{ asset('better-clean/images/rev.jpg') }}" alt="#"/>
                                 <i><img src="{{ asset('better-clean/images/2.png') }}" alt="#"/></i>
                                 <span>Luka duge</span>
                                 <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sureThere are many variations of passages of Lorem Ipsum available, but the majorityhave suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure</p>
                                 <a href="#">Read More</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev"> <i class='fa fa-angle-left'></i></a>
                     <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next"> <i class='fa fa-angle-right'></i></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end review -->
      <!-- contact -->
      <div id="request" class="contact">
         <div class="container-fluid">
            <div class="row">
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 padding-left1">
                  <div class="contact">
                     <div class="titlepage">
                        <h2>Request a call back</h2>
                     </div>
                     <form class="request">
                        <div class="row">
                           <div class="col-sm-12">
                              <input class="contactus" placeholder="Name" type="text" name="Name">
                           </div>
                           <div class="col-sm-12">
                              <input class="contactus" placeholder="Phone Number" type="text" name="Phone Number">
                           </div>
                           <div class="col-sm-12">
                              <input class="contactus" placeholder="Email" type="text" name="Email">
                           </div>
                           <div class="col-sm-12">
                              <textarea class="textarea" placeholder="Message" type="text" name="Message"></textarea>
                           </div>
                           <div class="col-sm-12">
                              <button class="send">Send</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 padding-right1">
                  <div id="map">
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end contact -->
@endsection