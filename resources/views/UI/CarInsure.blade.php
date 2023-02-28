@extends('layer.layout')

@section('content')

<!-- Start Breadcrumbs -->
<section class="breadcrumbs" style="background: url('fontend/images/car.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <h2>Car Insurance</h2>
                <ul class="bread-list">
                    <li><a href="/">Home<i class="fa fa-angle-right"></i></a></li>
                    <li class="active"><a href="{{route('carinsurance')}}">Car Searches</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--/ End Breadcrumbs -->
<style>
    .ulStyle {
        list-style: none;
    }

    .highlight {
        background-color: #ff9800;
        color: white;
        margin-top: 20px;
    }

    .pColor {
        color: white;
        margin-left: 10px;
    }
</style>
<!-- Start Services -->
<section class="services single section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-12 col-xs-12">
                <div class="services-main">
                    <!-- Service Slider -->
                    <div class="services-slider">
                        <!-- Single Slide -->
                        <div class="single-slide">
                          <a href="{{route('carquote.index')}}"> <img src="fontend/images/carSlide1.jpg" alt="#"></a>
                        </div>
                        <!-- End Single Slide -->
                        <!-- Single Slide -->
                        <div class="single-slide">
                          <a href="{{route('carquote.index')}}"><img src="fontend/images/carSlide2.jpg" alt="#"></a>
                        </div>
                        <!-- End Single Slide -->
                    </div>
                    <!-- End Service Slider -->
                    <!-- Service Content -->
                    <div class="services-content">
                        <h2 style="text-align: center;">Car Quote Search</h2>
                        <p>
                            <strong>We advise you to shop around to locate the best deal for Quotes.</strong> If you fill out our form located on our website, we can then look into your current situation and the conditions you are currently residing in. With the given information we will manually search into a deeper field of scope, to find insurance suited to your lifestyle, usually this is a more challenging premium which in turn will save you money and time.
                        </p>

                        <p>Any data you supply will only be used for the purposes of dealing with your enquiry. For mutual security, calls may be recorded and monitored for training purposes.</p>
                        <p>We do not act as a broker or agent for any particular company, although we work as a price searcher. We may provide you with links to comparison websites, and other various companies, to find you the best possible deal so that you can use our website with ease to save money. If you would like us to manually fill out any form on your behalf, we can do so, as long as you authorise us and provide us with accurate information. Based on the details given, we can provide you with prices from various different companies from price comparison sites. Sort Searcher does not make any personal recommendations as to the suitability of the policy to individual client’s circumstances.</p>
                        <div class="highlight">
                            <h4 style="padding: 10px;">Stay Legal</h4>
                            <p class="pColor">The law states that the registered keeper of a vehicle must keep it insured unless they’ve made a Statutory Off Road Notification. If you’re not insured and haven’t made a Statutory Off Road Notification, you could face a penalty, have the vehicle wheel-clamped, impounded, or destroyed.</p>
                            <p class="pColor">If you are insured it is important to check that your vehicle details are recorded correctly on the Motor Insurance Database. You can do this for free by checking <a href="http://ownvehicle.askmid.com/"> askMID here</a>. Simply enter your vehicle registration number and if your details do not appear, or are incorrect, you should contact your insurance provider immediately so that they can update your records.</p>
                        </div>
                    </div>
                    <!--/ End Service Content -->
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <!-- Service Sidebar -->
                <div class="services-sidebar">
                    <!-- Single Sidebar -->
                    <div class="single-sidebar category">
                        <ul class="ulStyle">
                            <li class="active"><a href="#"><i class="fa fa-list"></i>All Quotes</a></li>
                            <li><a href="{{route('vanquote.index')}}"><i class="fa fa-bus"></i>Van Quote</a></li>
                            <li><a href="{{route('motorquote.index')}}"><i class="fa fa-taxi"></i>Motor Quote</a></li>
                            <li><a href="#"><i class="fa fa-briefcase"></i>Business Quote</a></li>
                            <li><a href="#"><i class="fa fa-home"></i>Home Quote</a></li>
                            <li><a href="{{route('accquote.index')}}"><i class="fa fa-handshake-o"></i>Accident Management Quote</a></li>
                        </ul>
                    </div>
                    <!--/ End Single Sidebar -->
                    <div>
                        <a href="{{route('carquote.index')}}" class="btn btn-primary" style="width: 100%; margin-top: 10px;">GET CAR QOUTE NOW</a>
                    </div>
                    <!-- Single Sidebar -->
                    <div class="single-sidebar service" style="margin-top: 10px;">
                        <h2><span>More Service</span></h2>
                        <div class="single-service">
                            <a href="{{route('vaninsurance')}}"><img src="fontend/images/more/van.jpg" alt="" /></a>
                            <div class="caption">
                                <p><a href="{{route('vaninsurance')}}">Van Insurance</a></p>
                            </div>
                        </div>
                        <div class="single-service">
                            <a href="{{route('motorinsurance')}}"><img src="fontend/images/more/motor.jpg" alt="" /></a>
                            <div class="caption">
                                <p><a href="{{route('motorinsurance')}}">Motor Insurance</a></p>
                            </div>
                        </div>
                        <div class="single-service">
                            <a href="{{route('homeinsurance')}}"><img src="fontend/images/more/home.jpg" alt="" /></a>
                            <div class="caption">
                                <p><a href="{{route('homeinsurance')}}">Home Insurance</a></p>
                            </div>
                        </div>
                    </div>
                    <!--/ End Single Sidebar -->
                </div>
                <!--/ End Service Sidebar -->
            </div>

        </div>
    </div>
</section>
<!--/ End Services -->

@endsection