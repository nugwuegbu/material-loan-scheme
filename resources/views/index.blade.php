@extends('layouts.frontpage')
@section('content')
<div id="P_masterslider" class="master-slider-parent ms-parent-id-28" > 
  <!-- MasterSlider Main -->
  <div id="masterslider" class="master-slider ms-skin-default" >
    <div class="ms-slide" data-delay="5" data-fill-mode="fill" > <img src="#" alt="" title="" data-src="{{ asset('img/home_banner/payhome11.png') }}" /> 
      <!-- slide text layer -->
        <div style="background: rgba(240, 248, 255, 0.38); padding: 100px 100px 300px 100px; margin: 100px 50px;" class="ms-layer ms-caption"
             data-offset-x      = "600"
             data-offset-y      = "300"
             data-origin        = "c"
             data-type          = "text"
             data-effect        = "bottom(90)"
             data-duration      = "800"
             data-ease          = "easeOutQuart"
             data-align         = "center"
        >
        <p style="padding-bottom: 50px;">Design your building , choose the quality of materials and finishings,Quality construction with quantity of material as specified in the bill of quantity.
          <a href="#" class="btn btn-success">Get Started</a> 
        </p>
        
        </div>
     
     </div>
    <div class="ms-slide" data-delay="5" data-fill-mode="fill" > <img src="img/blank.gif" alt="" title="" data-src="{{ asset('img/home_banner/p5.png') }}" /> 
      <!-- slide text layer -->
        <div style="background: rgba(240, 248, 255, 0.38); padding: 100px 100px 300px 100px; margin: 100px 50px;" class="ms-layer ms-caption"
             data-offset-x      = "600"
             data-offset-y      = "300"
             data-origin        = "c"
             data-type          = "text"
             data-effect        = "bottom(90)"
             data-duration      = "800"
             data-ease          = "easeOutQuart"
             data-align         = "center"
         
        >
        <p style="padding-bottom: 50px;">Mortgage facilities.Subscriber who wishes to use mortgage pack for payment will be processed by Payhomes through primary mortgage bank.
       <a href="#" class="btn btn-success">Get Started</a> 
        </p>
        
        </div>
      
      </div>
    <div class="ms-slide" data-delay="5" data-fill-mode="fill" > <img src="img/blank.gif" alt="" title="" data-src="{{ asset('img/home_banner/payhome12.png') }}" /> 
      <!-- slide text layer -->
        <div style="background: rgba(240, 248, 255, 0.38); padding: 100px 100px 300px 100px; margin: 100px 50px;" class="ms-layer ms-caption"
             data-offset-x      = "600"
             data-offset-y      = "300"
             data-origin        = "c"
             data-type          = "text"
             data-effect        = "bottom(90)"
             data-duration      = "800"
             data-ease          = "easeOutQuart"
             data-align         = "center"
         
        >
        <p style="padding-bottom: 50px;">Take delivery of the material.Subscriber or representative ensures that our suppliers deliver the right quality and quantity of material billed to supply.
       <a href="#" class="btn btn-success">Get Started</a> 
        </p>
        
        </div>
     
      </div>
  </div>
  <!-- END MasterSlider Main --> 
</div>

<!-- END MasterSlider --> 

<!--Main Features-->

<div class="main-features">
  <div class="container">
    <div class="section-title center">
      <h4><strong>Payhomes</strong><br>
        <span class="orange">experience </span> best housing loan scheme</h4>
      <hr>
      <p class="para">Material Loan Scheme (MLS) is an initiative of payhomes Nigeria to provide material loan facilities <strong>for residential housing development in Nigeria.  </strong>The scheme is a new startup to provide easy access to building materials<br>
        <a href="{{ route('about-us') }}"><button class="btn btn-style-orange">more>></button></a>
       </p>
    </div>
    <!--<div class="row-fluid">-->
    <!--    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">-->
    <!--        <p id="get-started">-->
    <!--            Apply through Payhomes for material loan scheme, get loan from morgage of your choice and have materials supplied through known contractors.-->
                
    <!--        </p>-->
    <!--        <a href="" class="theme-btn btn-style-black-s">Get Start</a>-->
    <!--    </div>-->
    <!--</div>-->


  </div>
</div>

<!-- END Features --> 

<!--Recent Case -->

<!-- <div class="events-section latest-events">
  <div class="container">
    <div class="section-title center">
      <h2>Share <strong> Holder</strong></h2>
      <hr>
      <p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting
        industry. <strong>Lorem Ipsum has been the industry's standard dummy </strong>text
        ever since the 1500s, when an unknown printer took a galley of type and
        scrambled it to make a type specimen book. </p>
    </div>
    <div class="row clearfix"> 
     
      <div class="column default-featured-column style-two col-lg-4 col-md-6 col-sm-12 col-xs-12">
        <article class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
          <figure class="image-box"> <a href="#"><img src="img/advisors/01_advisors.jpg" alt=""></a> </figure>
          <div class="content-box">
            <div class="skill">
              <div class="row">
                <div class="col-md-4 col-sm-6 skill"> <span class="chart" data-percent="30"> <span class="percent">30</span> </span> </div>
              </div>
            </div>
            <h3><a href="#">Financial Planning</a></h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            <a href="#" class="theme-btn btn-style-orange">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>
        </article>
      </div>
      
      
      <div class="column default-featured-column style-two col-lg-4 col-md-6 col-sm-12 col-xs-12">
        <article class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
          <figure class="image-box"> <a href="#"><img src="img/advisors/02_advisors.jpg" alt=""></a> </figure>
          <div class="content-box">
            <div class="skill">
              <div class="row">
                <div class="col-md-4 col-sm-6 skill"> <span class="chart" data-percent="40"> <span class="percent">40</span> </span> </div>
              </div>
            </div>
            <h3><a href="#">Wealth Management</a></h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            <a href="#" class="theme-btn btn-style-orange">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>
        </article>
      </div>
      
      
      <div class="column default-featured-column style-two col-lg-4 col-md-6 col-sm-12 col-xs-12">
        <article class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
          <figure class="image-box"> <a href="#"><img src="img/advisors/03_advisors.jpg" alt=""></a> </figure>
          <div class="content-box">
            <div class="skill">
              <div class="row">
                <div class="col-md-4 col-sm-6 skill"> <span class="chart" data-percent="30"> <span class="percent">30</span> </span> </div>
              </div>
            </div>
            <h3><a href="#">Risk Analysis</a></h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            <a href="#" class="theme-btn btn-style-orange">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>
        </article>
      </div>
      
    </div>
  </div>
</div> -->

<!-- END Recent Case --> 
<!-- About  -->
<div id="about-working">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 col-sm-12 working no-pad img-responsive">
        <div class="container" style="background: url('{{ asset('img/background.png') }}'); background-repeat: no-repeat; background-size: 100%; display: block; margin-bottom: 30px; background-position: center; background-attachment: fixed; width: 100%; text-align: center; padding: 50px;">
      <!-- <h4><strong>Payhomes</strong><br> -->
        <span class="orange">experience best housing loan scheme</span></h4>
      <hr>
      <p class="para orange" style="background: rgba(240, 248, 255, 0.38); color:#ffffff;">30% equity contribution at each stage of development. <br>
        <a href="{{ route('register') }}"><button class="btn btn-success">Get Started</button></a>
       </p>
    </div>
      </div>
    </div>
  </div>
</div>

<div id="main-features">
  <div class="container">
      <div class="section-title center">
            <div class="row"> 
      
      <!--Default Icon Column-->
      <div class="default-icon-column col-lg-4 col-sm-12 col-xs-12">
        <article class="inner-box">
          <div class="icon-box">
            <div class="ico"> <span class="icon-search"></span></div>
          </div>
          <h3 class="text-center"> Subscribers</h3>
          <p>Register to apply a housing loan, get approval and built a house in your prefered location. </p>
          <a href="{{ route('about-us') }}" class="theme-btn btn-style-black-s">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </article>
      </div>
      
      <!--Default Icon Column-->
      <div class="default-icon-column col-lg-4 col-sm-12 col-xs-12">
        <article class="inner-box">
          <div class="icon-box">
            <div class="ico"> <span class="icon-handbag"></span></div>
          </div>
          <h3 class="text-center">Contractors</h3>
          <p>Register as a contractor , get regular updates and bid openings alerts and contract awards. </p>
          <a href="{{ route('about-us') }}" class="theme-btn btn-style-black-s">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </article>
      </div>
      
      <!--Default Icon Column-->
      <div class="default-icon-column col-lg-4 col-sm-12 col-xs-12">
        <article class="inner-box">
          <div class="icon-box">
            <div class="ico"> <span class="icon-happy"></span></div>
          </div>
          <h3 class="text-center">Mortgage Banks</h3>
          <p>Provide flexibe housing loans to facilitate residential housing scheme. 30% equity contributions. </p>
          <a href="{{ route('about-us') }}" class="theme-btn btn-style-black-s">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </article>
      </div>
      
    </div>
      </div>
  </div>
</div>

<div id="about-working">
  <div class=" container-fluid">
    <div class="row">
      <div class="col-md-6 col-sm-12 working no-pad img-responsive ">
        <div class="lead  col-sm-12 col-xm-12 text-center ">
          <div class="video-about">
            <div class="about-buttons-2"> <a href="https://www.youtube.com/watch?v=fCZ__KKtNcI" class="prettyphoto  btn text-center"><i class="fa fa-play"></i> </a> </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-12 benefit-right no-pad">
        <div class="benefit-text no-pad">
          <div class="benefit-heading ">
            <div class="col-md-12 col-sm-12">
              <h3>Loans <br>
                <span class="orange"><strong>How it works</strong></span></h3>
              <div class="project-text">Lorem ipsum dolor sit amet, </div>
              <p class="para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente,
                totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore ... </p>
              <a href="{{ route('about-us') }}" class="theme-btn btn-style-orange-b">About More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> <a href="{{ route('about-us') }}" class="theme-btn btn-style-black">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!--End About  --> 

<!--Events -->

<!-- <div class="events-section latest-events">
  <div class="container">
    <div class="section-title center">
      <h2>Business <strong> Events</strong></h2>
      <hr>
      <p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting
        industry. <strong>Lorem Ipsum has been the industry's standard dummy </strong>text
        ever since the 1500s, when an unknown printer took a galley of type and
        scrambled it to make a type specimen book. </p>
    </div>
    <div class="row clearfix"> 
      
      
      <div class="column default-featured-column style-two col-lg-4 col-md-6 col-sm-12 col-xs-12">
        <article class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
          <figure class="image-box"> <a href="#"><img src="img/event/01_event.jpg" alt=""></a> </figure>
          <div class="content-box">
            <h3><a href="#">Ecommerce Solution</a></h3>
            <div class="column-info">18-22 April in USA, Newyork</div>
            <p>Lorem ipsum dolor sit amet, eu qui modo expeten dis reformidans, ex sit appetere sententiae.. </p>
            <a href="#" class="theme-btn btn-style-orange">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </div>
        </article>
      </div>
      
      
      <div class="column default-featured-column style-two col-lg-4 col-md-6 col-sm-12 col-xs-12">
        <article class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
          <figure class="image-box"> <a href="#"><img src="img/event/02_event.jpg" alt=""></a> </figure>
          <div class="content-box">
            <h3><a href="#">Product Marketing</a></h3>
            <div class="column-info">18-22 March in USA, Newyork</div>
            <p>Lorem ipsum dolor sit amet, eu qui modo expeten dis reformidans, ex sit appetere sententiae.. </p>
            <a href="#" class="theme-btn btn-style-orange">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </div>
        </article>
      </div>
      
      
      <div class="column default-featured-column links-column col-lg-4 col-md-6 col-sm-12 col-xs-12">
        <div class="inner-box">
          <div class="vertical-links-outer">
            <div class="link-block">
              <div class="default inner">
                <figure class="image-thumb"><img src="img/event/01_thu.jpg" alt=""></figure>
                <strong> Branding</strong><span class="para">Lorem ipsum dolor sit amet et siu amet sio audiam si copiosaei mei purto </span></div>
              <a href="#" class="alternate"><strong>Playing For World</strong> <span class="para">Lorem ipsum dolor sit amet et siu amet sio audiam si copiosaei mei purto </span></a> </div>
            <div class="link-block">
              <div class="default inner">
                <figure class="image-thumb"><img src="img/event/02_thu.jpg" alt=""></figure>
                <strong> Development</strong><span class="desc">Lorem ipsum dolor sit amet et siu amet sio audiam si copiosaei mei purto </span></div>
              <a href="#" class="alternate"><strong>Playing For World</strong><span class="para">Lorem ipsum dolor sit amet et siu amet sio audiam si copiosaei mei purto </span></a> </div>
            <div class="link-block">
              <div class="default inner">
                <figure class="image-thumb"><img src="img/event/03_thu.jpg" alt=""></figure>
                <strong>Best Support</strong><span class="desc">Lorem ipsum dolor sit amet et siu amet sio audiam si copiosaei mei purto </span></div>
              <a href="#" class="alternate"><strong>Playing For World</strong><span class="para">Lorem ipsum dolor sit amet et siu amet sio audiam si copiosaei mei purto </span></a> </div>
            <div class="link-block">
              <div class="default inner">
                <figure class="image-thumb"><img src="img/event/04_thu.jpg" alt=""></figure>
                <strong>Custom Work</strong><span class="desc">Lorem ipsum dolor sit amet et siu amet sio audiam si copiosaei mei purto </span></div>
              <a href="#" class="alternate"><strong>Playing For World</strong><span class="para">Lorem ipsum dolor sit amet et siu amet sio audiam si copiosaei mei purto </span></a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->

<!-- END Events --> 

<!-- Achivement  -->

<!-- <div id="achivements" class="text-center ">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="row">
          <div class="col-md-3 col-sm-12">
            <div class="achivement-box">
              <div class="ico"> <span class="icon-trophy"></span></div>
              <span class="count">340</span>
              <h4>Won Award </h4>
            </div>
          </div>
          <div class="col-md-3 col-sm-12">
            <div class="achivement-box">
              <div class="ico"> <span class="icon-megaphone"></span> </div>
              <span class="count">$75000</span>
              <h4>Active Member </h4>
            </div>
          </div>
          <div class="col-md-3 col-sm-12">
            <div class="achivement-box">
              <div class="ico"> <span class="icon-happy"></span> </div>
              <span class="count">900</span>
              <h4>Happy Clients </h4>
            </div>
          </div>
          <div class="col-md-3 col-sm-12">
            <div class="achivement-box">
              <div class="ico"> <span class="icon-basket"></span> </div>
              <span class="count">115</span>
              <h4>Successful Project</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->

<!-- End Achivement  --> 

<!--Testimonials-->

<div class="testimonials-section style-two">
  <div class="container">
    <div class="section-title center">
      <h2>Our<strong> Testimonials</strong></h2>
      <hr>
      <p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting
        industry. <strong>Lorem Ipsum has been the industry's standard dummy </strong>text
        ever since the 1500s, when an unknown printer took a galley of type and
        scrambled it to make a type specimen book. </p>
    </div>
    
    <!--Slider-->
    <div class="testimonials-slider testimonials-carousel"> 
      
      <!--Slide-->
      <article class="slide-item">
        <div class="info-box">
          <figure class="image-box"><img src="{{ asset('img/testimonials/01_testimonial.jpg') }}" alt=""></figure>
          <h3>Mark Doe</h3>
          <p class="designation">Rome, Italy</p>
        </div>
        <div class="slide-text">
          <div class="testimonials-s">"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.."</div>
        </div>
      </article>
      
      <!--Slide-->
      <article class="slide-item">
        <div class="info-box">
          <figure class="image-box"><img src="{{ asset('img/testimonials/02_testimonial.jpg') }}" alt=""></figure>
          <h3>Joan Pine</h3>
          <p class="designation">Business Man</p>
        </div>
        <div class="slide-text">
          <div class="testimonials-s">"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.."</div>
        </div>
      </article>
      
      <!--Slide-->
      <article class="slide-item">
        <div class="info-box">
          <figure class="image-box"><img src="{{ asset('img/testimonials/03_testimonial.jpg') }}" alt=""></figure>
          <h3>Petter Noi</h3>
          <p class="designation">Co- Founder </p>
        </div>
        <div class="slide-text">
          <div class="testimonials-s">"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.."</div>
        </div>
      </article>
      
      <!--Slide-->
      <article class="slide-item">
        <div class="info-box">
          <figure class="image-box"><img src="{{ asset('img/testimonials/04_testimonial.jpg') }}" alt=""></figure>
          <h3>Joan Doi </h3>
          <p class="designation">Business Man</p>
        </div>
        <div class="slide-text">
          <div class="testimonials-s">"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.."</div>
        </div>
      </article>
      
      <!--Slide-->
      <article class="slide-item">
        <div class="info-box">
          <figure class="image-box"><img src="{{ asset('img/testimonials/05_testimonial.jpg') }}" alt=""></figure>
          <h3>Mark Pine</h3>
          <p class="designation">Business Man</p>
        </div>
        <div class="slide-text">
          <div class="testimonials-s">"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.."</div>
        </div>
      </article>
    </div>
  </div>
</div>

<!--END Testimonials--> 
<!-- Call Us -->

<!-- <div class="tollfee low-back">
  <div class="text-con-app  low-back-up">
    <div class="container">
      <div class="row">
        <div id="contact-inner" class="text-center low-back-footer-w">
          <div class="low-back-up">
            <div class="col-md-6 c-2">
              <div class="section-title center">
                <h2>Leave<strong> message</strong></h2>
              </div>
              <form name="sentMessagee" id="contactForm" novalidate>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <input type="text" id="name" class="form-control" placeholder="Name" required="required">
                      <p class="help-block text-danger"></p>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <input type="email" id="email" class="form-control" placeholder="Email" required="required">
                      <p class="help-block text-danger"></p>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
                  <p class="help-block text-danger"></p>
                </div>
                <button type="submit" class="btn-download-send">Send Message</button>
              </form>
            </div>
          </div>
        </div>
        <div class="lead col-lg-6  col-xm-12 text-center donation-back ">
          <div class="donation-text"><span class="small-do white">Toll Free</span> <br>
            <strong>1800-555-333</strong> </div>
          <p class="donation-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus eveniet nobis aliquam    
            quam odio quisquam cupiditate dicta </p>
          <a href="#" class="theme-btn btn-style-orange">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i> </a> </div>
      </div>
    </div>
  </div>
</div> -->

<!-- End  --> 

<!--Blog News Section-->

<!-- <div id="blog" class="blog-div-area">
  <div class="container">
    <div class="row">
      <div class="section-title center text-center">
        <h2><strong>latest</strong> post</h2>
        <hr>
        <div class="mid"></div>
        <p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting
          industry. <strong>Lorem Ipsum has been the industry's standard dummy </strong>text
          ever since the 1500s, when an unknown printer took a galley of type and
          scrambled it to make a type specimen book. </p>
      </div>
    </div>
    <div class="blog-content-div">
      <div class="row">
        <div class="col-md-4 col-sm-12 col-xs-12">
          <div class="single-blog">
            <div class="feature-images"> <a href="#"> <img alt="blog" src="img/blogs/01_blog.jpg"> </a>
              <div class="overley"></div>
            </div>
            <div class="blog-content">
              <h3><a href="#">Blog Title Here</a></h3>
              <ul>
                <li>blog Item Rating : </li>
                <li><a href="#"><i class="fa fa-star"></i></a> </li>
                <li><a href="#"><i class="fa fa-star"></i></a> </li>
                <li><a href="#"><i class="fa fa-star"></i></a> </li>
                <li><a href="#"><i class="fa fa-star"></i></a> </li>
                <li><a href="#"><i class="fa fa-star"></i></a> </li>
                <li class="comments"><a href="#">2 comments</a> </li>
              </ul>
              <p class="blog-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus eveniet nobis aliquam quam odio quisquam cupiditate dicta recusandae ratione saepe impedit, maxime, earum omnis quia sint. Excepturi aliquid, necessitatibus dolore.</p>
              <a class="theme-btn btn-style-orange" href="#">Read more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12">
          <div class="single-blog">
            <div class="feature-images"> <a href="#"> <img alt="blog" src="img/blogs/02_blog.jpg"> </a>
              <div class="overley"></div>
            </div>
            <div class="blog-content">
              <h3><a href="#">Blog Title Here</a></h3>
              <ul>
                <li>blog Item Rating : </li>
                <li><a href="#"><i class="fa fa-star"></i></a> </li>
                <li><a href="#"><i class="fa fa-star"></i></a> </li>
                <li><a href="#"><i class="fa fa-star"></i></a> </li>
                <li><a href="#"><i class="fa fa-star"></i></a> </li>
                <li><a href="#"><i class="fa fa-star"></i></a> </li>
                <li class="comments"><a href="#">3 comments</a> </li>
              </ul>
              <p class="blog-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus eveniet nobis aliquam quam odio quisquam cupiditate dicta recusandae ratione saepe impedit, maxime, earum omnis quia sint. Excepturi aliquid, necessitatibus dolore.</p>
              <a class="theme-btn btn-style-orange" href="#">Read more <i class="fa fa-long-arrow-right" aria-hidden="true"></i> </a> </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12">
          <div class="single-blog">
            <div class="feature-images"> <a href="#"> <img alt="blog" src="img/blogs/03_blog.jpg"> </a>
              <div class="overley"></div>
            </div>
            <div class="blog-content">
              <h3><a href="#">Blog Title Here</a></h3>
              <ul>
                <li>blog Item Rating : </li>
                <li><a href="#"><i class="fa fa-star"></i></a> </li>
                <li><a href="#"><i class="fa fa-star"></i></a> </li>
                <li><a href="#"><i class="fa fa-star"></i></a> </li>
                <li><a href="#"><i class="fa fa-star"></i></a> </li>
                <li><a href="#"><i class="fa fa-star"></i></a> </li>
                <li class="comments"><a href="#">2 comments</a> </li>
              </ul>
              <p class="blog-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus eveniet nobis aliquam quam odio quisquam cupiditate dicta recusandae ratione saepe impedit, maxime, earum omnis quia sint. Excepturi aliquid, necessitatibus dolore.</p>
              <a class="theme-btn btn-style-orange" href="#">Read more <i class="fa fa-long-arrow-right" aria-hidden="true"></i> </a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->

<!-- End Blog News Section--> 

<!-- Team  -->

<!-- <div id="team" class="team">
  <div class="container">
    <div class="section-title  center">
      <h2>CORPORATE <strong> TEAM </strong></h2>
      <hr>
      <p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting
        industry. <strong>Lorem Ipsum has been the industry's standard dummy </strong>text
        ever since the 1500s, when an unknown printer took a galley of type and
        scrambled it to make a type specimen book. </p>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div class="ms-staff-carousel">
          <div class="master-slider" id="teamslider">
            <div class="ms-slide"> <img src="#" data-src="img/team/01_team.jpg" alt=""/>
              <div class="ms-info text-center">
                <h3>Team Member Name</h3>
                <h4>Businessmann</h4>
                <ul class="ms-socials list-inline">
                  <li><a href="#"><i class="fa fa-facebook facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-youtube youtube"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin linkedin"></i></a></li>
                </ul>
              </div>
            </div>
            
            <div class="ms-slide"> <img src="#" data-src="img/team/02_team.jpg" alt=""/>
              <div class="ms-info text-center">
                <h3>Team Member Name</h3>
                <h4>Businessmann</h4>
                <ul class="ms-socials list-inline">
                  <li><a href="#"><i class="fa fa-facebook facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-youtube youtube"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          
            <div class="ms-slide"> <img src="#" data-src="img/team/03_team.jpg" alt=""/>
              <div class="ms-info text-center">
                <h3>Team Member Name</h3>
                <h4>Businessmann</h4>
                <ul class="ms-socials list-inline">
                  <li><a href="#"><i class="fa fa-facebook facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-youtube youtube"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin linkedin"></i></a></li>
                </ul>
              </div>
            </div>
            
            <div class="ms-slide"> <img src="#" data-src="img/team/04_team.jpg" alt=""/>
              <div class="ms-info text-center">
                <h3>Team Member Name</h3>
                <h4>Businessmann</h4>
                <ul class="ms-socials list-inline">
                  <li><a href="#"><i class="fa fa-facebook facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-youtube youtube"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin linkedin"></i></a></li>
                </ul>
              </div>
            </div>
           
            <div class="ms-slide"> <img src="#" data-src="img/team/05_team.jpg" alt=""/>
              <div class="ms-info text-center">
                <h3>Team Member Name</h3>
                <h4>Businessmann</h4>
                <ul class="ms-socials list-inline">
                  <li><a href="#"><i class="fa fa-facebook facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-youtube youtube"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin linkedin"></i></a></li>
                </ul>
              </div>
            </div>
            
            <div class="ms-slide"> <img src="#" data-src="img/team/06_team.jpg" alt=""/>
              <div class="ms-info text-center">
                <h3>Team Member Name</h3>
                <h4>Businessmann</h4>
                <ul class="ms-socials list-inline">
                  <li><a href="#"><i class="fa fa-facebook facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-youtube youtube"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin linkedin"></i></a></li>
                </ul>
              </div>
            </div>
            
            <div class="ms-slide"> <img src="#" data-src="img/team/03_team.jpg" alt=""/>
              <div class="ms-info text-center">
                <h3>Team Member Name</h3>
                <h4>Businessmann</h4>
                <ul class="ms-socials list-inline">
                  <li><a href="#"><i class="fa fa-facebook facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-youtube youtube"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin linkedin"></i></a></li>
                </ul>
              </div>
            </div>
            
          </div>
          
          <div class="ms-staff-info" id="staff-info"> </div>
        </div>
        
      </div>
      
    </div>
    
  </div>
   
</div> -->

<!-- END TEAM --> 

<!--Sponsors Section-->

<!-- <div class="sponsors">
  <div class="container">
    <div class="slider-outer"> 
      
      <ul class="sponsors-slider">
        <li><a href="#"><img src="img/clients/01_client.jpg" alt=""></a></li>
        <li><a href="#"><img src="img/clients/02_client.jpg" alt=""></a></li>
        <li><a href="#"><img src="img/clients/03_client.jpg" alt=""></a></li>
        <li><a href="#"><img src="img/clients/04_client.jpg" alt=""></a></li>
        <li><a href="#"><img src="img/clients/05_client.jpg" alt=""></a></li>
      </ul>
    </div>
  </div>
</div> -->

<!-- Demo Heading -->

@endsection
