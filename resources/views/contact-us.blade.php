@extends('layouts.frontpage')
@section('content')
<div id="home" class="bg-inner low-back-gradient-inner">
  <div class="text-con-inner low-back-up">
    <div class="container">
      <div class="row">
        <div class="lead col-lg-12 col-xm-12 text-center">
          <h1><span class="top-heading-inner">Contact Us </span></h1>
          <div class="list-o-i white">
            <p class="white no-p">24 Hours customer support service<br>
              have challenges? reach out to us
              by filling the form below
               </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--End Header--> 

<!-- Pagenation-->
<div class="pagenation-holder">
  <div class="container">
    <div class="row">
      <div class="col-md-6 text-left">
        <div class="pagenation_links"><a href="{{ url('/') }}">Home</a><i> / </i> Contact Us</div>
      </div>
      <div class="col-md-6"> </div>
    </div>
  </div>
</div>
<!--End Pagenation--> 

<br>
<br>

<!-- Contact -->

<div id="contact-inner" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2>Get in<strong> Touch</strong></h2>
      <hr>
      <p class="para">If you have questions or need more clarifications on the Payhomes loan services, <strong>or you want to find out how to start or to speak directly with our staff</strong>
         </p>
    </div>
    <div class="col-md-12">
      <div class="col-md-4 contact-inner"> <i class="fa fa-map-marker fa-2x"></i>
        <p class="gray">Abuja and Lagos, Nigeria</p>
      </div>
      <div class="col-md-4 contact-inner"> <i class="fa fa-envelope-o fa-2x"></i>
        <p class="gray">info@payhomes.com.ng</p>
      </div>
      <div class="col-md-4 contact-inner"> <i class="fa fa-phone fa-2x"></i>
        <p class="gray"> +2348037997777</p>
      </div>
      <hr>
      <div class="clearfix"></div>
    </div>
    <div class="col-md-10 col-md-offset-1  col-sm-offset-0  c-3">
      <div class="section-title center">
        <h2>Leave<strong> message</strong></h2>
      </div>
      <form name="sentMessage" id="contactForm" novalidate>
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
        <div id="success"></div>
        <button type="submit" class="btn-download-send"><span>Subscribe</span></button>
      </form>
    </div>
  </div>
</div>
@endsection