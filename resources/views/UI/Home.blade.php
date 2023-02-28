@extends('layer.layout')

@section('content')
<style>
    .img-round{
        border-radius: 145px;
        margin: 0 auto;
        border: 5px solid #ff9800;
    }
    .px-10{
        padding-top: 10px;
    }
    .py-10{
        padding-bottom: 10px;
    }

    .sectiontop{
        padding-top: 20px;
        background-color: #ffffff;
    }

    a.btn.primary {
    background: red !important;
    margin-top: -30px;
    }

    a.btn.primary:hover {
    background: #353535 !important;
    }

/* Tablet Layout */
@media (min-width: 768px) and (max-width: 991px) {
    .px-10{
        padding-bottom: 15px;
    }

    .py-10 {
    padding-top: 15px;
    }
}

/* Mobile Layout */
@media (max-width: 450px) {
    .px-10{
        padding-bottom: 15px;
    }

    .py-10 {
    padding-top: 15px;
    }
}

@media (min-width: 1200px){
    .mycontent-left {
  border-right: 1px dashed #333;
            }
}

/* Surface Layout */
@media (min-width: 540px) and (max-width: 720px) {
    .px-10{
        padding-bottom: 15px;
    }

    .py-10 {
    padding-top: 15px;
    }
}

</style>
<!-- Start Hero Area -->
<section class="hero-area">
    <div>
        <!-- Single Slider -->
        <div class="single-slider" style="background-image:url('fontend/images/slider/carinsurance.png')">
            <div id="color-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-12 col-xs-12">
                        <!-- Slider Text -->
                        <div class="slide-text">
                            <h1><span class="short">In most cases the prices we find for you are CHEAPER than what you can find yourself.</span>Car Insurance</h1>
                            <p></p>
                            <div class="slide-btn">
                                <a href="{{route('carquote.index')}}" class="btn primary" style="color: #ffffff;">CLICK HERE TO GET FREE QUOTES</a>
                            </div>
                        </div>
                        <!--/ End SLider Text -->
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Single Slider -->
        
    </div>
</section>
<!--/ End Hero Area -->

<!-- Start Services -->
<section id="services" class="services section sectiontop">
    <div class="container-fluid">
        <div class="row hidden">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-title">
                    <h1>Our services</h1>
                </div>
            </div>
        </div>
        <div class="row display-flex">
            <!-- Single Service -->
            <div class="col-md-3 col-sm-6 col-xs-12 text-center">                
                    <h4 class="py-10">Find Your Car</h4>
                    <img class="img-round center" src="fontend\images\findcar.png" alt="car">
                    <div class="px-10">
                    <a class="btn btn-primary" href="https://www.systonautosltd.co.uk/" target="_blank">Find Your Car</a>
                    </div>
            </div>
            <!--/ End Single Service -->
            <!-- Single Service -->
            <div class="col-md-3 col-sm-6 col-xs-12 text-center">                
                    <h4 class="py-10">Accident Management</h4>
                    <img class="img-round center" src="fontend\images\motortrade.png" alt="car">
                    <div class="px-10">
                    <a class="btn btn-primary" href="{{route('accinsurance')}}" target="_blank">Get Asistance</a>
                    </div>
            </div>
            <!--/ End Single Service -->
            <!-- Single Service -->
            <div class="col-md-3 col-sm-6 col-xs-12 text-center">                
                    <h4 class="py-10">Property Management</h4>
                    <img class="img-round center" src="fontend\images\home.png" alt="car">
                    <div class="px-10">
                    <a class="btn btn-primary" href="http://www.swift-estates.co.uk/" target="_blank">Find Your Home</a>
                    </div>
            </div>
            <!--/ End Single Service -->
            <!-- Single Service -->
            <div class="col-md-3 col-sm-6 col-xs-12 text-center">                
                    <h4 class="py-10">Cloud Service</h4>
                    <img class="img-round center" src="fontend\images\cloud.png" alt="car">
                    <div class="px-10">
                    <a class="btn btn-primary" href="https://www.desicloud.co.uk/" target="_blank">Cloud Service</a>
                    </div>
            </div>
            <!--/ End Single Service -->

        </div>
    </div>
</section>
<!--/ End Services -->
<style>
    .text-white {
        font-size: 18px;
        padding-bottom: 10px;
        color: white;
    }
    .blackWp{
        background-color: black !important;
        padding-bottom: 155px !important;
    }
</style>
<!-- Why Choose Us -->
<section id="why-choose" class="why-choose section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 fix">
                <div class="working-process mycontent-left">
                    <h1 style="color: white; margin-bottom: 10px;">OUR IDENTITY</h1>
                    <p class="text-white">We are an independent price searching company, search on your behalf with your consent to find you reasonable prices. We can assist the vulnerable customers with very helpful service as our multilingual dedicated friendly staffs are waiting to serve. Also, you are strongly advised to understand our <a style="color: black;" href="{{route('terms')}}">Terms &amp; Conditions</a> and <a style="color: black;" href="{{route('privacy')}}">Privacy Policy</a> thoroughly before accepting our services.
                    </p>
                    <p class="text-white">We do not work as a broker or agent for any specific company. However, we are registered with the Information Commissioner's Office (ICO) and all your information are protected under the 'Data Protection Act & General Data Protection Regulation (GDPR 2018).
                    </p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 fix">
                <div class="working-process blackWp">
                    <h1 style="color: white;margin-bottom: 10px;">HOW WE WORK</h1>
                    <div class="box text-white">
                        <ul style="list-style: disc !important;">
                            <li>⦾ 100% professional service &amp; customer care.</li>
                            <li>⦾ Ease your searching stress but don't forget our job is only up to searching you quotes.</li>
                            <li>⦾ after getting quotes you deal with the rest therefore, the Setup process easy and smooth.</li>
                            <li>⦾ search cheaper possible price along with best deals.</li>
                            <li>⦾ Work with 100% accuracy based on the information you provide.</li>
                            <li>⦾ We strongly advise you to check every single details before accepting any quotes and must amend it immediately if there's any DISCREPANCY by contacting your insurer.</li>
                            <li>⦾ We do not share any of your information with the third parties.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Why Choose Us -->


<!-- Start Team -->
<section id="team" class="team section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-title">
                    <h1 style="color: red;">" SORT OUTS DOES NOT MAKE ANY PERSONAL RECOMMENDATIONS OR GIVE ANY FINANCIAL ADVICE AS TO THE SUITABILITY OF ANY PRODUCTS TO OUR CLIENTS. PLEASE NOTE, WE WILL NOT BE ABLE TO GO AHEAD FURTHER WITH ANY OF YOUR QUOTES YOU HAVE RECEIVED BY EMAIL VIA OUR SEARCHING AS WE ARE NOT ALLOWED TO BUY, ADMINISTRATE, MONITOR OR CARRY OUT ANY REGULATED ACTIVITIES. ALSO YOU ARE STRONGLY ADVISED TO UNDERSTAND OUR TERMS & CONDITIONS AND PRIVACY POLICY THOROUGHLY BEFORE ACCEPTING OUR SERVICES. "</h1>
                </div>
            </div>
        </div>
</section>
<!--/ End Team -->

<!-- Start Features -->
<section class="features hidden">
    <div class="container-fluid">
        <div class="row">
            <!-- Features Single -->
            <div class="col-md-3 col-sm-3 col-xs-12 features-single">
                <i class="fa fa-phone hidden"></i>
                <h2>Speak in your language</h2>
            </div>
            <!--/ End Features Single -->
            <!-- Features Single -->
            <div class="col-md-3 col-sm-3 col-xs-12 features-single active ">
                <i class="fa fa-phone hidden"></i>
                <h2>اپنی زبان بولیں</h2>
            </div>
            <!--/ End Features Single -->
            <!-- Features Single -->
            <div class="col-md-3 col-sm-3 col-xs-12 features-single">
                <i class="fa fa-phone hidden"></i>
                <h2>আপনার ভাষায় কথা বলতে কল করুন</h2>
            </div>
            <!--/ End Features Single -->
            <!-- Features Single -->
            <div class="col-md-3 col-sm-3 col-xs-12 features-single active">
                <i class="fa fa-phone hidden"></i>
                <h2>تحدث لغتك</h2>
            </div>
            <!--/ End Features Single -->
        </div>
    </div>
</section>
<!--/ End Features -->
<!-- Start Call-To-Action -->
<section class="call-to-action hidden">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="call-to-main">
                    <h2>we are the one with <span>enough experience </span>for your best guidance</h2>
                    <a href="{{route('contact.index')}}" class="btn"><i class="fa fa-send"></i>Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Call-To-Action -->

@endsection