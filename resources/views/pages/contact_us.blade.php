@extends('layout')

@section('main')
    <div class="breadcrumb-area shadow dark text-center bg-fixed text-light"
        style="background-image:url({{asset('images/about_banner.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h1>contact us</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{route('home')}}"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">contact us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12 text-left contact-address">
                <h3>contact us</h3>
                <h1>trident shipping</h1>

                <ul>

                    <li>
                        <div class="contact-address-icon"><i class="fas fa-map-marker-alt"></i></div>
                        <div class="contact-address-info">
                            <h5>address </h5>
                            <p>Plot No. 220, Ward-3/B, Adipur, Kachchh - 370205, Gujarat, India.</p>
                        </div>
                    </li>

                    <li>
                        <div class="contact-address-icon"><i class="fas fa-phone-alt"></i></div>
                        <div class="contact-address-info">
                            <h5>phone no.</h5>
                            <p>+00 00000 00000</p>
                        </div>
                    </li>

                    <li>
                        <div class="contact-address-icon"><i class="fas fa-envelope"></i></div>
                        <div class="contact-address-info">
                            <h5>email </h5>
                            <p><a href="mailto:info@tridentshipping.co.in">info@tridentshipping.co.in</a></p>
                        </div>
                    </li>

                </ul>
            </div>

            <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12 text-left">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-bg">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h3>GET QUOTE</h3>
                        <h1>Requast A Quote</h1>
                    </div>
                    <form name="form" action="{{ route('sendmail') }}" method="post" onsubmit="return formvalid();">
                        @csrf
                        <div class="contact-form col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <input type="text" class="contact-form-bor" name="nm" id="" required
                                placeholder="Enter Full Name" value="{{ old('nm') }}">
                            @error('nm')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror       
                        </div>
                    
                        <div class="contact-form col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <input type="text" class="contact-form-bor" name="cn" id="" required
                                placeholder="Enter Company Name" value="{{ old('cn') }}">
                            @error('cn')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    
                        <div class="contact-form col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <input type="text" class="contact-form-bor" name="lo" id="" required
                                placeholder="Enter Location" value="{{ old('lo') }}">
                            @error('lo')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    
                        <div class="contact-form col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <input type="text" class="contact-form-bor" name="ph" id=""
                                pattern="[789][0-9]{9}" required placeholder="Enter Phone No."
                                value="{{ old('ph') }}">
                            @error('ph')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    
                        <div class="contact-form col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <input type="text" class="contact-form-bor" name="email" id=""
                                pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" required
                                placeholder="Enter Email ID" value="{{ old('email') }}">
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    
                        <div class="contact-form col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <textarea name="Message" id="" class="contact-form-textar" rows=""
                                placeholder="Enter Your Message...">{{ old('Message') }}</textarea>
                            @error('Message')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    
                        <div class="contact-form col-lg-12 col-md-12 col-sm-12 col-xs-12 text-left">
                            <input name="submit" type="submit" id="submit_contact" class="form-btn "/>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>

    <section id="map-section">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3670.694549039689!2d70.09043421496862!3d23.071657384928173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3950b9068bac35b3%3A0xa68ff03121e730f3!2sTrident%20Shipping!5e0!3m2!1sen!2sin!4v1641539104877!5m2!1sen!2sin"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section>
@endsection
