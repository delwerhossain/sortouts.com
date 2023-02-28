@extends('layer.layout')

@section('content')
<script src="https://www.google.com/recaptcha/api.js"></script>
<!-- Start Contact -->
<section id="contact-us" class="contact-us section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-title">
                    <h1>Contact Us</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <x-alert />
        </div>
        <div class="row">
            <!-- Contact Form -->
            <div class="col-md-8 col-sm-6 col-xs-12">
                <form class="form" method="post" action="{{route('contact.store')}}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="name" placeholder="Full Name" value="{{ old('name') }}" required="required">
                                @error('name')
                                <div class="alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="email" placeholder="Your Email" value="{{ old('email') }}" required="required">
                                @error('email')
                                <div class="alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" name="subject" placeholder="Subject" value="{{ old('subject') }}" required="required">
                                @error('subject')
                                <div class="alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea name="messageBody" rows="7" placeholder="Type Your Message Here">{{ old('messageBody') }}</textarea>
                                @error('messageBody')
                                <div class="alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-6">
                            
                                <div class="form-group button">
                                    <button type="submit" class="btn primary">Submit Message</button>
                                </div>
                            </div>
                            <div class="col-md-6">
                                
                                {!! NoCaptcha::renderJs() !!}
                                {!! NoCaptcha::display() !!}
                                <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                                
                            </div>
                            
                        </div>
                    </div>
                </form>
            </div>
            <!--/ End Contact Form -->
            <!-- Contact Address -->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="contact-address">
                    <div class="contact">
                        <h2>Get In Touch</h2>

                        <!-- Single Address -->
                        <div class="single-address">
                            <span><i class="fa fa-headphones"></i>Phone</span>
                            <p>0330 113 2041</p>
                        </div>
                        <!--/ End Single Address -->
                        <!-- Single Address -->
                         <div class="single-address">
                            <span><i class="fa fa-envelope"></i>Email</span>
                            <p> <strong>Quotes Or Customer Service:</strong> <br/>
                            <a href="mailto:info@sortouts.com">info@sortouts.com</a></p>
                            <p> <strong>Complaints Or Administration:</strong>  <br/>
                            <a href="mailto:admin@sortouts.com">admin@sortouts.com</a></p>
                        </div>
                        <!--/ End Single Address -->
                        <!--/ End Single Address -->
                        <!-- Single Address -->
                        <div class="single-address">
                            <span><i class="fa fa-map"></i>Corporate Office:</span>
                            <p>167c City Road, Cardiff, United Kingdom, CF24 3BQ, England.</p>
                        </div>
                        <!--/ End Single Address -->
                    </div>
                </div>
            </div>
            <!--/ End Contact Address -->
        </div>
    </div>
</section>
<!--/ End Contact -->
<!-- Start Call-To-Action -->
<section class="call-to-action">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="call-to-main">
                    <h2>sort out <span>your needs</span> with us</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Call-To-Action -->
@endsection