@extends('frontEnd.master')
@section('content')
    <main>

        <!--
          - #HOME SECTION
        -->

        <section class="home" id="home">

            <div class="deco-shape shape-1">
                <img src="{{asset('frontEnd')}}/assets/images/shape-1.png" alt="art shape" width="70">
            </div>
            <div class="deco-shape shape-2">
                <img src="{{asset('frontEnd')}}/assets/images/shape-2.png" alt="art shape" width="55">
            </div>
            <div class="deco-shape shape-3">
                <img src="{{asset('frontEnd')}}/assets/images/shape-3.png" alt="art shape" width="120">
            </div>
            <div class="deco-shape shape-4">
                <img src="{{asset('frontEnd')}}/assets/images/shape-4.png" alt="art shape" width="30">
            </div>

            <div class="home-left">

                <p class="section-subtitle">{{$slider->slider_subtitle}}</p>

                <h1 class="main-heading">
                    {{$slider->slider_title}}
                    <span class="underline-img"> {{$slider->slider_title_two}}<img src="{{asset('frontEnd')}}/assets/images/banner-line.png" alt="line"></span>
                </h1>

                <p class="section-text">
                    {{$slider->slider_description}}
                </p>

                <div class="home-btn-group">
                    <a href="{{route('home')}}#course">
                        <button class="btn btn-primary">
                            <p class="btn-text">Our Courses</p>
                            <span class="square"></span>
                        </button>
                    </a>
                    <a href="{{route('contact')}}">
                        <button class="btn btn-secondary">
                            <p class="btn-text">Contact Us</p>
                            <span class="square"></span>
                        </button>
                    </a>
                </div>

            </div>

            <div class="home-right">

                <div class="img-box">

                    <img src="{{asset($slider->background)}}" alt="colorful background shape" class="background-shape">
                    <img src="{{asset($slider->person)}}" alt="banner image" class="banner-img">
                    @if($slider->icon1)
                        <img src="{{asset($slider->icon1)}}" alt="" class="icon-1 smooth-zigzag-anim-1" width="250">
                    @endif
                    @if($slider->icon2)
                        <img src="{{asset($slider->icon2)}}" alt="" class="icon-2 smooth-zigzag-anim-2" width="240">
                    @endif

                    @if($slider->icon3)
                        <img src="{{asset($slider->icon3)}}" alt="" class="icon-3 smooth-zigzag-anim-3" width="195">
                    @endif
                    <img src="{{asset('frontEnd')}}/assets/images/banner-aliment-icon-4.png" alt="" class="icon-4 drop-anim">

                </div>

            </div>

        </section>





        <!--
          - #COURSE CATEGORY SECTION
        -->

        <section class="category">

            <p class="section-subtitle">{{$categoryHeader->course_header}}</p>

            <h2 class="section-title">{{$categoryHeader->course_subheader}}</h2>

            <ul class="course-item-group">
                @foreach($categories as $category)
                    <li class="course-category-item">

                        <div class="wrapper">
                            <img src="{{asset($category->category_img)}}" alt="category icon" class="category-icon default">

                            <img src="{{asset($category->white_category_img)}}" alt="category icon white"
                                 class="category-icon hover">
                        </div>

                        <div class="course-category-content">
                            <h3 class="category-title">
                                <a href="#">{{$category->course_title}}</a>
                            </h3>

                            <p class="category-subtitle">{{$category->course_subtitle}}</p>
                        </div>

                    </li>
                @endforeach

            </ul>

        </section>





        <!--
          - #ABOUT SECTION
        -->

        <section class="about" id="about">

            <div class="about-left">

                <div class="img-box">
                    <img src="{{asset($aboutImage->background)}}" alt="about bg" class="about-bg">

                    <img src="{{asset($aboutImage->background_person)}}" alt="about person" class="about-img">
                    @if($aboutImage->icon_one)
                        <img src="{{asset($aboutImage->icon_one)}}" alt="" class="icon-1 smooth-zigzag-anim-1" width="250">
                    @endif
                    @if($aboutImage->icon_two)
                        <img src="{{asset($aboutImage->icon_two)}}" alt="" class="icon-2 smooth-zigzag-anim-3" width="195">
                    @endif
                </div>

            </div>

            <div class="about-right">

                <p class="section-subtitle">{{$aboutHeader->about_title}}</p>

                <h2 class="section-title">{{$aboutHeader->about_subtitle}}</h2>

                <p class="section-text">
                    {{$aboutHeader->about_description}}
                </p>

                <ul class="about-ul">
                    @if($aboutHeader->text_one)
                        <li>
                            <ion-icon name="checkmark-circle"></ion-icon>
                            <p>{{$aboutHeader->text_one}}</p>
                        </li>
                    @endif

                    @if($aboutHeader->text_second)
                            <li>
                                <ion-icon name="checkmark-circle"></ion-icon>
                                <p>{{$aboutHeader->text_second}}</p>
                            </li>
                        @endif

                    @if($aboutHeader->text_third)
                            <li>
                                <ion-icon name="checkmark-circle"></ion-icon>
                                <p>{{$aboutHeader->text_third}}</p>
                            </li>
                        @endif

                    @if($aboutHeader->text_four)
                            <li>
                                <ion-icon name="checkmark-circle"></ion-icon>
                                <p>{{$aboutHeader->text_four}}</p>
                            </li>
                        @endif

                    @if($aboutHeader->text_five)
                            <li>
                                <ion-icon name="checkmark-circle"></ion-icon>
                                <p>{{$aboutHeader->text_five}}</p>
                            </li>
                        @endif


                </ul>

                <a href="{{route('contact')}}">
                    <button class="btn btn-primary">
                        <p class="btn-text" >Contact Us</p>
                        <span class="square"></span>
                    </button>
                </a>

            </div>

        </section>






        <!--
          - #COURSE SECTION
        -->

        <section class="course" id="course">

            <p class="section-subtitle">{{$courseHeader->course_header}}</p>

            <h2 class="section-title">{{$courseHeader->course_subheader}}</h2>

            <div class="course-grid">

                @foreach($courses as $course)

                <div class="course-card">

                    <div class="course-banner">
                        <img src="{{asset($course->image)}}" alt="course banner">

                        <div class="course-tag-box">
                            @if($course->button_1)
                                <a href="{{route('all-course')}}" class="badge-tag orange">{{$course->button_1}}</a>
                            @endif
                            @if($course->button_2)
                                <a href="{{route('all-course')}}" class="badge-tag blue">{{$course->button_2}}</a>
                                @endif
                        </div>
                    </div>

                    <div class="course-content">

                        <h3 class="card-title">
                            <a href="{{route('all-course')}}">{{$course->course_name}}</a>
                        </h3>

                        <div class="wrapper border-bottom">

                            <div class="author">

                                <a href="{{route('all-course')}}" class="author-name align-content-center">{!! substr($course->course_description,0,100) !!}</a>
                            </div>


                        </div>

                        <div class="wrapper">
                            <div class="course-price">Total Student</div>

                            <div class="enrolled">
                                <div class="icon-user">
                                    <img src="{{asset('frontEnd')}}/assets/images/student-icon.png" alt="user icon">
                                </div>

                                <p>{{$course->student}}</p>
                            </div>
                        </div>

                    </div>

                </div>
                @endforeach

            </div>

            <a href="{{route('all-course')}}">
                <button class="btn btn-primary">
                    <p class="btn-text">View All Course</p>
                    <span class="square"></span>
                </button>
            </a>

        </section>





        <!--
          - #EVENT SECTION
        -->

        <section class="event">

            <div class="event-left">

                <div class="event-banner">
                    <img src="{{asset($eventHeader->image)}}" alt="event banner" class="banner-img">
                </div>


                <button class="play smooth-zigzag-anim-1">
                    <div class="play-icon pulse-anim">
                        <ion-icon name="play-circle"></ion-icon>
                    </div>

                    <p>Watch Us !</p>
                </button>

            </div>

            <div class="event-right">

                <p class="section-subtitle">{{$eventHeader->event_title}}</p>

                <h2 class="section-title">{{$eventHeader->event_subtitle}}</h2>

                <div class="event-card-group">
                    @foreach($events as $event)

                    <div class="event-card">

                        <div class="content-left">
                            <p class="day">{{date('j',strtotime($event->date))}}</p>
                            <p class="month">{{date('F,Y',strtotime($event->date))}}</p>
                        </div>

                        <div class="content-right">
                            <div class="schedule">
                                <p class="time">{{$event->start_time}} To {{$event->end_time}}</p>
                                <p class="place">{{$event->address}}</p>
                            </div>

                            <a href="#" class="event-name">{{$event->event_title}}</a>
                        </div>

                    </div>
                    @endforeach


                </div>

            </div>

        </section>





        <!--
          - #FEATURES SECTION
        -->

        <section class="features">

            <div class="features-left">

                <p class="section-subtitle">{{$featuresHeader->feature_title}}</p>

                <h2 class="section-title">{{$featuresHeader->feature_subtitle}}</h2>

                <ul>
                    @php $i=1 @endphp

                    @foreach($features as $feature)

                    <li class="features-item">
                        <div class="item-icon-box @if($i==1) blue @elseif($i==2) pink @else purple @endif  ">
                            <img src="{{asset($feature->image)}}" alt="feature icon">
                        </div>

                        <div class="wrapper">

                            <h3 class="item-title">{{$feature->feature_itemTitle}}</h3>

                            <p class="item-text">{{$feature->feature_itemSubtitle}}</p>

                        </div>
                    </li>
                        @php $i++ @endphp
                    @endforeach


                </ul>

            </div>

            <div class="features-right">
                <img src="{{asset($featuresHeader->image)}}" alt="core features image">
            </div>

        </section>





        <!--
          - #INSTRUCTOR SECTION
        -->

        <section id="instructor" class="instructor">

            <p class="section-subtitle">{{$teacherHeader->instructor_header}}</p>

            <h2 class="section-title">{{$teacherHeader->instructor_subheader}}</h2>

            <div class="instructor-grid">

                @foreach($teachers as $teacher)

                <div class="instructor-card">

                    <div class="instructor-img-box">
                        <img src="{{asset($teacher->image)}}" alt="instructor louis sullivan">

                        <div class="social-link">
                            @if($teacher->facebook)
                                <a href="{{$teacher->facebook}}" class="facebook">
                                    <ion-icon name="logo-facebook"></ion-icon>
                                </a>
                            @endif

                            @if($teacher->linkedin)
                                <a href="{{$teacher->linkedin}}" class="instagram">
                                    <ion-icon name="logo-linkedin"></ion-icon>
                                </a>
                                @endif

                                @if($teacher->twitter)
                                    <a href="{{$teacher->twitter}}" class="twitter">
                                        <ion-icon name="logo-twitter"></ion-icon>
                                    </a>
                                @endif
                        </div>
                    </div>

                    <h4 class="instructor-name">{{$teacher->teacher_name}}</h4>

                    <p class="instructor-title">{{$teacher->designation}}</p>

                </div>
                @endforeach


            </div>

        </section>



        <!--
          - #TESTIMONIALS
        -->

        <section class="testimonials">

            <div class="testimonials-left">

                <p class="section-subtitle">{{$testimonial->testimonial_title}}</p>

                <h2 class="section-title">{{$testimonial->testimonial_subtitle}}</h2>

                <p class="section-text">
                    {{$testimonial->testimonial_description}}
                </p>

            </div>

            <div class="testimonials-right">

                <div class="testimonials-card">
                    <img src="{{asset('frontEnd')}}/assets/images/quote.png" alt="quote icon" class="quote-img">

                    <p class="testimonials-text">
                        {{$testimonial->customer_description}}
                    </p>

                    <div class="testimonials-client">

                        <div class="client-img-box">
                            <img src="{{asset($testimonial->image)}}" alt="client christine rose">
                        </div>

                        <div class="client-detail">
                            <h4 class="client-name">{{$testimonial->customer_name}}</h4>

                            <p class="client-title">{{$testimonial->customer_designation}}</p>
                        </div>

                    </div>
                </div>

            </div>

        </section>





        <!--
          - #BLOG
        -->

        <section class="blog" id="blog">

            <p class="section-subtitle">{{$blogHeader->blog_header}}</p>

            <h2 class="section-title">{{$blogHeader->blog_subheader}}</h2>

            <div class="blog-grid">

                @foreach($blogs as $blog)

                <div class="blog-card">

                    <div class="blog-banner-box">
                        <img src="{{asset($blog->image)}}" style="height: 250px" alt="blog banner">
                    </div>

                    <div class="blog-content">

                        <h3 class="blog-title">
                            <a href="{{route('blog-details',['id'=>$blog->id])}}">{{$blog->blog_title}}</a>
                        </h3>

                        <div class="wrapper">
                            <div class="blog-comment">
                                <img src="{{asset('frontEnd')}}/assets/images/author.png" alt="comment icon">

                                <a href="#">{{$blog->author}}</a>
                            </div>

                            <div class="blog-publish-date">
                                <img src="{{asset('frontEnd')}}/assets/images/calendar.png" alt="calendar icon">

                                <a href="#">{{date('F-j-Y',strtotime($blog->date))}}</a>
                            </div>



                        </div>

                    </div>

                </div>
                @endforeach


            </div>

        </section>





        <!--
          - #CONTACT
        -->

        <section class="contact">

            <div class="contact-card" id="contact">
                <img src="{{asset('frontEnd')}}/assets/images/cta-bg-img.png" alt="shape" class="contact-card-bg">

                <h2>Start Your Best IST Classes With Us</h2>
                <a href="{{route('contact')}}">
                    <button class="btn btn-primary">
                        <p class="btn-text">Contact Us</p>
                        <span class="square"></span>
                    </button>
                </a>
            </div>

        </section>

    </main>
@endsection
