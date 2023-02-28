@extends('layer.layout')

@section('content')

<!-- Start Breadcrumbs -->
<section class="breadcrumbs" style="background: url('fontend/images/aboutBanner.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <h2>About Us</h2>
                <ul class="bread-list">
                    <li><a href="/">Home<i class="fa fa-angle-right"></i></a></li>
                    <li class="active"><a href="{{route('about')}}">about us</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--/ End Breadcrumbs -->

<!-- Our Skill -->
<section id="our-skill" class="our-skill section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-title">
                    <h1>About Company</h1>

                </div>
                <p style="text-align: justify;">We 'Sort Outs' Trading Under Sort Services Ltd are passionate about providing you with hundreds of quotes from online & offline markets along with smooth customer service start to finish. We aim to work with you step by step to assist you with free multiple non-obligatory quotes. Your quotes are based on how accurate the information you give us and on the various comparison sites we use to provide you with affordable prices. We do not work as a broker or agent for any specific company. However, we are registered with the Information Commissioner's Office (ICO) and all your information are protected under the 'Data Protection Act & General Data Protection Regulation (GDPR 2018). We are an independent price searching company, search on your behalf with your consent to find you reasonable prices. We can assist the vulnerable customers with very helpful service as our multilingual dedicated friendly staffs are waiting to serve. Also, you are strongly advised to read our Terms and Conditions and Privacy Policy thoroughly before accepting our services.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="skill-text">
                    <h2>Our Objective</h2>
                    <p>We want to provide our customers with quality services on their Quotes searching but must be noticed, after our searches if you are happy with one of the quotes and want to go ahead further, must follow the Quote Reference number or contact number provided with the quotes as we won't be able to arrange deals or contracts for customers under the 'FSMA Act 2000'.</p>
                    <a href="contact.html" class="btn primary hidden">Contact Us</a>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="skill-text">
                    <h2>Our Customers</h2>
                    <p>You are requested very politely to be well aware of our <a style="color: black;" href="{{route('terms')}}" target="_blank">Terms &amp; Conditions</a> along with the <a style="color: black;" href="{{route('privacy')}}" target="_blank">Privacy Policy</a> and our limitations. You can count on our dependability, drives and integrity. We take great pride in what we do and build on achieving more and more every day.</p>

                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Our Skill -->

<!-- Start Call-To-Action -->
<section class="call-to-action">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="call-to-main">
                    <h2>sort out <span>your needs</span> with us</h2>
                    <a href="{{route('contact.index')}}" class="btn"><i class="fa fa-send"></i>Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Call-To-Action -->

@endsection