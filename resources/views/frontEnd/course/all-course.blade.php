@extends('frontEnd.master')
@section('css')
    <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/course_details.css">
    <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/blog.css">

@endsection
@section('js')
    <!-- Tabs js -->
    <script src="{{asset('frontEnd')}}/assets/js/isotope.min.js"></script>
    <script src="{{asset('frontEnd')}}/assets/js/custom.js"></script>


@endsection
@section('content')

    <main id="main">
        <section class="about-us container pt-5" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="section-heading">
                            <h6>All Course</h6>
                            <h4>Know Us Better</h4>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="naccs">
                            <div class="tabs">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="menu text-center">
                                            <div class="active gradient-border"><span>Total Cost</span></div>
                                            <div class="gradient-border"><span>Admission</span></div>
                                            <div class="gradient-border"><span>Scholar Ship</span></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <ul class="nacc">
                                            <li class="active">
                                                <div>
                                                    <div class="main-list">
                                                        <span class="title">Technology</span>
                                                        <span class="title">Monthly Cost</span>
                                                        <span class="title">Monthly Cost Per Semester</span>
                                                        <span class="title">Semester Fee</span>
                                                        <span class="title">Lab and Development Fees</span>
                                                        <span class="title">Total Cost Per Semester</span>
                                                        <span class="title">4 Years(8 semester) Total Cost</span>
                                                    </div>
                                                    <div class="list-item">
                                                        <span class="item item-title">Computer</span>
                                                        <span class="item">1500 Tk</span>
                                                        <span class="item">9000 Tk</span>
                                                        <span class="item">6000 Tk</span>
                                                        <span class="item">1000 Tk</span>
                                                        <span class="item">16000 Tk</span>
                                                        <span class="item">128000 Tk</span>
                                                    </div>
                                                    <div class="list-item">
                                                        <span class="item item-title">Architecture</span>
                                                        <span class="item">1200 Tk</span>
                                                        <span class="item">7200 Tk</span>
                                                        <span class="item">6000 Tk</span>
                                                        <span class="item">1000 Tk</span>
                                                        <span class="item">16000 Tk</span>
                                                        <span class="item">113600 Tk</span>
                                                    </div>
                                                    <div class="list-item">
                                                        <span class="item item-title">Civil</span>
                                                        <span class="item">1200 Tk</span>
                                                        <span class="item">7200 Tk</span>
                                                        <span class="item">6000 Tk</span>
                                                        <span class="item">1000 Tk</span>
                                                        <span class="item">16000 Tk</span>
                                                        <span class="item">113600 Tk</span>
                                                    </div>
                                                    <div class="list-item last-item">
                                                        <span class="item item-title">Electrical</span>
                                                        <span class="item">1200 Tk</span>
                                                        <span class="item">7200 Tk</span>
                                                        <span class="item">6000 Tk</span>
                                                        <span class="item">1000 Tk</span>
                                                        <span class="item">16000 Tk</span>
                                                        <span class="item">113600 Tk</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div >
                                                    <div class="main-list">
                                                        <span class="title">SL No</span>
                                                        <span class="title">SSC/Equivalent Exam Result</span>
                                                        <span class="title">Admission Fee Discount</span>
                                                        <span class="title">Admission Fee</span>
                                                        <span class="title-admission">Admission form, Registration And Other Fees</span>
                                                        <span class="title">Total Tk</span>
                                                    </div>
                                                    <div class="list-item">
                                                        <span class="item item-title">1</span>
                                                        <span class="item">5.00</span>
                                                        <span class="item">100%</span>
                                                        <span class="item">0</span>
                                                        <span class="title-admission">1000</span>
                                                        <span class="item">1000</span>
                                                    </div>
                                                    <div class="list-item">
                                                        <span class="item item-title">2</span>
                                                        <span class="item">4.75-4.99</span>
                                                        <span class="item">75%</span>
                                                        <span class="item">1500</span>
                                                        <span class="title-admission">1000</span>
                                                        <span class="item">2500</span>
                                                    </div>
                                                    <div class="list-item">
                                                        <span class="item item-title">3</span>
                                                        <span class="item">4.50-4.74</span>
                                                        <span class="item">50%</span>
                                                        <span class="item">3000</span>
                                                        <span class="title-admission">1000</span>
                                                        <span class="item">4000</span>
                                                    </div>
                                                    <div class="list-item">
                                                        <span class="item item-title">4</span>
                                                        <span class="item">4.00-4.49</span>
                                                        <span class="item">25%</span>
                                                        <span class="item">4500</span>
                                                        <span class="title-admission">1000</span>
                                                        <span class="item">5500</span>
                                                    </div>
                                                    <div class="list-item last-item">
                                                        <span class="item item-title">5</span>
                                                        <span class="item">2.00-3.99</span>
                                                        <span class="item">No</span>
                                                        <span class="item">6000</span>
                                                        <span class="title-admission">1000</span>
                                                        <span class="item">7000</span>
                                                    </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <div class="main-list text-center">
                                                        <span class="scholarship">Special Scholar Ship</span>
                                                        <span class="scholarship">Admission Eligibility</span>
                                                    </div>
                                                    <div class="list-item">
                                                        <span class="scholarship item-title align-text-bottom">Special Scholarship:100% female students and 70% male students every semester stipend and book purchase assistance by government.20% scholarship on tuition fees of 100% female students.1st, 2nd and 3rd position holders in the phase examination in each category are exempted from tuition fees and 100% tuition fee concession for those who obtained GPA 4.00. Also special scholarship of RS fund and SR fund for poor and meritorious.</span>
                                                        <span class="scholarship">Admission Eligibility (as per Bangladesh Technical Education Board Rules) → Minimum qualification for admission to Diploma-in-Engineering course is pass in SSC or equivalent (Madrasa, BM, Vocational, Open) examination with minimum 2.00 GPA. → Students who have passed HSC (Vocational) will get an opportunity to get admission in 4th round on vacant seats through credit transfer. → Students who passed HSC (Science) will get an opportunity to get admission in 3rd phase in vacant seats.</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog-other container" >
            <div class="container" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-8 entries">

                        @foreach($courses as $course)

                            <article class="entry">

                            <div class="entry-img">
                                <img src="{{asset($course->image)}}" style="width: 100%; height: auto; "  alt="" class="img-fluid">
                            </div>

                            <h2 class="entry-title">
                                <a href="{{route('course-details',['id'=>$course->id])}}">{{$course->course_name}}</a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="{{route('course-details',['id'=>$course->id])}}">{{$course->technology}}</a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a><time datetime="2020-01-01">{{date('F-j-Y',strtotime($course->created_at))}}</time></a></li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                    {!! substr($course->course_description,0,300) !!} ......
                                </p>
                                <div class="read-more">
                                    <a href="{{route('course-details',['id'=>$course->id])}}">Read More</a>
                                </div>
                            </div>

                        </article><!-- End blog entry -->

                        @endforeach



{{--                        <div class="blog-pagination">--}}
{{--                            <ul class="justify-content-center">--}}
{{--                                <li><a href="#">1</a></li>--}}
{{--                                <li class="active"><a href="#">2</a></li>--}}
{{--                                <li><a href="#">3</a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}

                    </div><!-- End blog entries list -->

                    <div class="col-lg-4">

                        <div class="sidebar">
                            <h3 class="sidebar-title">Our All Courses</h3>
                            <div class="sidebar-item recent-posts">
                                @foreach($courses as $course)
                                    <div class="post-item clearfix">
                                        <img src="{{asset($course->image)}}" alt="">
                                        <h4><a href="{{route('course-details',['id'=>$course->id])}}">{{$course->course_name}}</a></h4>
                                        <time datetime="2020-01-01">{{date('F-j-Y',strtotime($course->created_at))}}</time>
                                    </div>
                                @endforeach

                            </div><!-- End sidebar recent posts-->


                        </div><!-- End sidebar -->

                    </div><!-- End blog sidebar -->

                </div>

            </div>
        </section><!-- End Blog Section -->



    </main>
@endsection
