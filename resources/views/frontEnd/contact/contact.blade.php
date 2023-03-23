@extends('frontEnd.master')
@section('css')
    <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/contact.css">
@endsection
@section('content')
    <main id="main">

        <section id="contact container" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-heading">
                    <h6>Contact Us</h6>
                    <h4>Contact us the get started</h4>
                </div>
                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                @endif

                <div class="row">

                    <div class="col-lg-5 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="info">
                            @if($pageFooter->address)
                                <div class="address">

                                    <i>
                                        <ion-icon name="location-outline"></ion-icon>
                                    </i>
                                    <h4>Location:</h4>
                                    <p>{{$pageFooter->address}}</p>
                                </div>
                            @endif
                            @if($pageFooter->email)
                                <div class="email">
                                    <i>
                                        <ion-icon name="mail-outline"></ion-icon>
                                    </i>
                                    <h4>Email:</h4>
                                    <p>{{$pageFooter->email}}</p>
                                </div>
                            @endif
                            @if($pageFooter->number)
                                <div class="phone">
                                    <i>
                                        <ion-icon name="phone-portrait-outline"></ion-icon>
                                    </i>
                                    <h4>Call:</h4>
                                    <p>{{$pageFooter->number}}</p>
                                </div>
                            @endif

                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.861083705936!2d90.36840211429698!3d23.752332694620954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf52189ebcf5%3A0x10081ab90b263871!2sInstitute%20of%20Science%20%26%20Technology%20(IST)!5e0!3m2!1sen!2sbd!4v1677590374759!5m2!1sen!2sbd" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                        </div>

                    </div>

                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <form method="POST" action="{{route('send.email')}}" class="php-email-form">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">Your Name</label>
                                    <input type="text" name="name" class="form-control" id="name" value="{{old('name')}}" placeholder="Your Name">
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6 mt-3 mt-md-0">
                                    <label for="name">Your Email</label>
                                    <input type="email" class="form-control" name="email" id="email" value="{{old('email')}}" placeholder="Your Email">
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <label for="name">Subject</label>
                                <input type="text" class="form-control" name="subject" id="subject" value="{{old('subject')}}" placeholder="Subject">
                                @if ($errors->has('subject'))
                                    <span class="text-danger">{{ $errors->first('subject') }}</span>
                                @endif
                            </div>
                            <div class="form-group mt-3">
                                <label for="name">Message</label>
                                <textarea class="form-control" name="message" rows="10">{{old('message')}}</textarea>
                                @if ($errors->has('message'))
                                    <span class="text-danger">{{ $errors->first('message') }}</span>
                                @endif
                            </div>
                            <div class="text-center">
                                <button type="submit">
                                    Send Message
                                </button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Us Section -->

    </main>
@endsection
