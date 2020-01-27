@extends('layouts.frontpage')
@section('content')
<div id="about-us" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2> About <strong>Us</strong></h2>
      <hr>
      <div class="row"> <br>
        <div class="col-md-5"> <img src="{{ asset('img/about/about1.png') }}" alt=""></div>
        <div class="col-md-6 text-left">
          <p>Material Loan Scheme (MLS) is an initiative of payhomes Nigeria to provide material loan facilities for residential housing development in Nigeria.The scheme is a new startup to provide easy access to building materials for the construction of residential housing for low income earners who can not afford the present cost of purchasing or building a house. MLS is an accelerated housing development scheme to create over 500,000 houses for Nigerians through the loans </p>
          <p>The scheme was initiated to address the housing deficit in Nigeria.</p>
          <p>All it requires is for you to have a buildable land title document, 30% equity contribution, building designs/Drawing , building approval and bill of quantity.</p>
          <p>The equity contribution is a flexible payment model, the payment model can be in two ways.</p>
            

         <!--  <a href="#" class="theme-btn btn-style-orange-b">About More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> <a href="#" class="theme-btn btn-style-black">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> --> 
        </div>
        <div class="row">
          <div class="col-md-12 text-left">
             <div class="accordion">
                         <div class="panel-group" id="accordion1">
                              <div class="panel panel-default">
                                   <div class="panel-heading active">
                                        <div class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1"> 30% equity contribution at each stage of development <i class="fa fa-angle-right pull-right"></i> </a> </div>
                                   </div>
                                   <div id="collapseOne1" class="panel-collapse collapse">
                                        <div class="panel-body">
                                             <div class="media accordion-inner">
                                                  <div class="media-body">
                                                       <p>This stage can be divided into agreed stages of construction with the customer.</p>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                              <div class="panel panel-default">
                                   <div class="panel-heading active">
                                        <div class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1">30% equity payment for materials <i class="fa fa-angle-right pull-right"></i> </a> </div>
                                   </div>
                                   <div id="collapseTwo1" class="panel-collapse collapse">
                                        <div class="panel-body">
                                             <p>for materials to be supplied at each stages of the agreed construction. eg Windows, Cement, Sand, Gravel etc. </p>
                                        </div>
                                   </div>
                              </div>
                              
                         </div>
                         <!--/#accordion1--> 
                    </div>
            <p>
              The flexible payment makes it easily affordable because the payment is not in bulk, most subscribers enjoy the easy payment model.
            
              <p>
                Our subscribers has the opportunity to design their building , choose the quality of materials and finishings, it also ensures quality construction with the right quantity of material as specified in the bill of quantity.
              </p>
              <p>
                Our subscriber will partake in the construction process from foundation to completion to ensure quality construction work.
              </p>
              <p>
                Our subscriber will be made to enjoy the mortgage facilities. A subscriber who wishes to use mortgage pack for their payment will be processed by Payhomes through primary mortgage bank. The mortgage can be spread to 25 years.
              </p>
              <p>
                Our subscribers will take delivery of the material personally or through it's representative. The subscriber or representative will ensure that our suppliers deliver the right quality and quantity of material billed to supply.
                <p>Our suscriber will be provided with a Building Contractor that will handle the construction work.</p>
              </p>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection