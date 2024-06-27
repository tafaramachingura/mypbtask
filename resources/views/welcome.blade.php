@extends('layout')
    <body class="antialiased body">
        <div class="row">
            <div id="header" class="bg-primary container-fluid">
                <div class="container">
                    <!-- menu bar-->
                   <div class="row">
                       <ul class="nav navbar ">
                          <li class="nav-link text-white text-md text-lg text-white"> <i class="bi-bi-bandaid " style="color:#ffff !important"></i><a href="">Bussiness</a></li>
                          <li class="nav-link text-white"><a href="">Home</a></li>
                           <li class= "nav-link text-white"><a href="#services">Services</a></li>
                           <li class="nav-link text-white"><a href="#pricing">Pricing</a></li>
                           <li class="nav-link text-white"><a href="{{route('login')}}">Login</a></li>


                       </ul>
                    </div>
                    <!-- Header title and body-->
                     <div class='row mt-4'>
                        <div class="col-sm-4 col-md-6 col-lg-6">
                            <p class='justify-content-center'><h2 class='text-3xl text-white'>{{$headerdata[0]->title}}</h2></p>
                            <p class=' justify-content-center text-2xl text-white'>{{$headerdata[0]->body}}</p>
                            <p class=' justify-content-center text-2xl text-white'><button class='btn text-primary'>GET STARTED</button> <span> <i class="bi bi-play-circle-fill text-2xl text-white"></i> Watch Intro</span></p>

                            </div>
                            <!--Header image -->
                            <div class="col-sm-4 col-md-6 col-lg-6">
                                <p class='justify-content-center'><img src="{{$headerdata[0]->imagePath}}" class='img-fluid'></p>
    
                                </div>
                     </div>
                    
                 </div>
               </div>
              
            </div>
        </div>
         <!-------- OuR STORY SECTION ---->
     <section id='about'>

        <div class="container-fluid">
            <div class="row mt-5 bg-grey-700">
                <div class='container'>
                    
                        <div class='row'>
                            <div class='col-sm-4 col-md-6 col-lg-6'>

                       <p><img src="{{$aboutimage[0]->imagePath}}" class="img-fluid"></p>
                            </div>
                            <div class="col-sm-4 col-md-6 col-lg-6">
                                <p> <i class="bi bi-dash text-primary"></i> <span>Our Story</span></p>
                                <p> <h2><strong> Our team comes with the experience and knowledge</strong></h2></p>
                               
                               
                                <ul class="nav nav-pills bg-gray-700">
                                    <li class="nav-item">
                                      <a class="nav-link active" data-toggle="tab" href="#us">{{$aboutdata[0]->title}}</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" data-toggle="tab" href="#vision">{{$aboutdata[1]->title}}</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" data-toggle="tab" href="#history">{{$aboutdata[2]->title}}</a>
                                    </li>
                                  </ul>
                                  
                                  <!-- Tab panes -->
                                  <div class="tab-content mt-4">
                                    <div class="tab-pane container active" id="us"> {{$aboutdata[0]->body}}</div>
                                    <div class="tab-pane container fade" id="vision"> {{$aboutdata[1]->body}}</div>
                                    <div class="tab-pane container fade" id="history"> {{$aboutdata[2]->body}}</div>
                                  </div>
                               
                               

                                </div>
                            </div>
                        </div>
                   
                </div>
             </div>
        </div>
    </section>   
     <!--- Services Section --->
     <section id="services">
        <div class="container-fluid mt-5">
          <div class="container">
          
                <div class="text-center"><input type="button" class="btn btn-outline-primary btn-lg " value="Services" style="border-radius:20px;"></div>
           
            <div class="row mt-5">
                <!---- first box ---->
                <div class="d-flex col-sm-4 col-md-4 col-lg-4">
                    <div class="service-box shadow-sm p-3 mb-5 bg-grey rounded">
                        <p><i class="bi bi-bandaid text-primary"></i> </p>
                        <br>
                        <p><strong>{{$servicesdata[0]->title}}</strong> </p>
                        <br>
                        <p>{{$servicesdata[0]->body}} </p>

                    </div>
                </div>
                <!---- second box ---->
                <div class="d-flex col-sm-4 col-md-4 col-lg-4">
                    <div class="service-box shadow-sm p-3 mb-5 bg-grey rounded">
                        <p><i class="bi bi-bootstrap-fill text-primary"></i> </p>
                        <br>
                        <p><strong>{{$servicesdata[1]->title}}</strong> </p>
                        <br>
                        <p>{{$servicesdata[1]->body}} </p>

                    </div>
                </div>

                 <!---- third box ---->
                 <div class="d-flex col-sm-4 col-md-4 col-lg-4">
                    <div class="service-box shadow-sm p-3 mb-5 bg-grey rounded">
                        <p><i class="bi bi-code text-primary"></i> </p>
                        <br>
                        <p><strong>{{$servicesdata[2]->title}}</strong> </p>
                        <br>
                        <p>{{$servicesdata[2]->body}} </p>

                    </div>
                </div>

                 <!---- fourth box ---->
                 <div class="d-flex col-sm-4 col-md-4 col-lg-4">
                    <div class="service-box shadow-sm p-3 mb-5 bg-grey rounded">
                        <p><i class="bi bi-speedometer2 text-primary"></i> </p>
                        <br>
                        <p><strong>{{$servicesdata[3]->title}}</strong> </p>
                        <br>
                        <p>{{$servicesdata[3]->body}} </p>

                    </div>
                </div>
                 <!---- second box ---->
                 <div class="d-flex col-sm-4 col-md-4 col-lg-4">
                    <div class="service-box shadow-sm p-3 mb-5 bg-grey rounded">
                        <p><i class="bi bi-bootstrap-fill text-primary"></i> </p>
                        <br>
                        <p><strong>{{$servicesdata[4]->title}}</strong> </p>
                        <br>
                        <p>{{$servicesdata[4]->body}} </p>

                    </div>
                </div>
                 <!---- second box ---->
                 <div class="d-flex col-sm-4 col-md-4 col-lg-4">
                    <div class="service-box shadow-sm p-3 mb-5 bg-grey rounded">
                        <p><i class="bi bi-stack text-primary"></i> </p>
                        <br>
                        <p><strong>{{$servicesdata[5]->title}}</strong> </p>
                        <br>
                        <p>{{$servicesdata[5]->body}} </p>

                    </div>
                </div>
            </div>
          </div>
        </div>
        </section> 
        <!-------Pricing section----->
        <section id='pricing' class="bg-light mt-5">
            <div class="container-fluid">
                <div class="container">
                    <div class="text-center"><input type="button" class="btn btn-outline-primary btn-lg mt-5" style="border-radius:20px;" value="Pricing"></div>
           
                    <div class="row mt-5">
                        <!-- first box --->
                        <div class="d-flex col-sm-4 col-md-4 col-lg-4">
                            <div class="pricing-box shadow-sm p-3 mb-5 bg-grey rounded">
                                <div class="text-center"><button class="btn btn-outline-primary">{{$pricingData[0]->package_plan}}</button> </div>
                                
                                <p class='mt-4'>{{$pricingData[0]->package_title}} </p>
                                <div class="text-center pricing"><span>$</span>{{$pricingData[0]->package_price}}<span class='price-span'>/m</span></div>
                                 <div class="text-center mt-4">
                                    <button class="btn btn-outline-primary">START FREE TRIAL</button>
                                 </div>
                                <div class="features mt-4">
                                    @php
                                    $data=explode(',', $pricingData[0]->package_features) 
                                  @endphp
                                    @foreach ($data as $list)
                                        <p><i class='bi bi-check-circle'></i> {{$list}}</p>
                                    @endforeach
                                 </div>
                            </div>
                        </div>
                        <!---- second box ---->
                        <div class="d-flex col-sm-4 col-md-4 col-lg-4">
                            <div class="pricing-box shadow-sm p-3 mb-5 bg-grey rounded">
                                <div class="text-center"><button class="btn btn-primary">{{$pricingData[1]->package_plan}}</button> </div>
                                
                                <p class='mt-4'>{{$pricingData[1]->package_title}} </p>
                                <div class="text-center pricing"><span>$</span>{{$pricingData[1]->package_price}}<span class='price-span'>/m</span></div>
                                 <div class="text-center mt-4">
                                    <button class="btn btn-primary">START FREE TRIAL</button>
                                 </div>
                                <div class="features mt-4">
                                    @php
                                    $data=explode(',', $pricingData[1]->package_features) 
                                  @endphp
                                    @foreach ($data as $list)
                                        <p><i class='bi bi-check-circle'></i> {{$list}}</p>
                                    @endforeach
                                 </div>
                            </div>
                        </div>
        
                         <!---- third box ---->
                         <div class="d-flex col-sm-4 col-md-4 col-lg-4">
                            <div class="pricing-box shadow-sm p-3 mb-5 bg-grey rounded">
                                <div class="text-center"><button class="btn btn-outline-primary">{{$pricingData[2]->package_plan}}</button> </div>
                                
                                <p class='mt-4'>{{$pricingData[2]->package_title}} </p>
                                <div class="text-center pricing"><span>$</span>{{$pricingData[2]->package_price}}<span class='price-span'>/m</span></div>
                                 <div class="text-center mt-4">
                                    <button class="btn btn-outline-primary">START FREE TRIAL</button>
                                 </div>
                                <div class="features mt-4">
                                    @php
                                    $data=explode(',', $pricingData[2]->package_features) 
                                  @endphp
                                    @foreach ($data as $list)
                                        <p><i class='bi bi-check-circle'></i> {{$list}}</p>
                                    @endforeach
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="footer" class='bg-primary text-center py-5'>
        <div class="container-fluid">
            
        <div class="container col-md-5 col-sm-5 col-lg-5">
           
             <div class=" text-center">
               
                 <strong><h2 class='text-white text-center'>{{$footer[0]->title}}</h2></strong>
                <p class='text-white'> {{$footer[0]->body}}</p>
             </div>
             </div>
            </div>    
        </div>    
        </div>    
        </section>   
     
       
          <script src="{{asset('js/jquery-3.7.1.min.js')}}"></script>
          <script src="{{asset('js/bootstrap.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
    
</body>
</html>
