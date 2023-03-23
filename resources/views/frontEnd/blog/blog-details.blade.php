@extends('frontEnd.master')
@section('css')
    <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/blog-single.css">
@endsection
@section('content')

    <main id="main">


        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-8 entries">

                        <article class="entry entry-single">

                            <div class="entry-img">
                                <img src="{{asset($blog->image)}}" alt="" style="width: 100%" class="img-fluid">
                            </div>

                            <h2 class="entry-title">
                                <a>{{$blog->blog_title}}</a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">{{$blog->author}}</a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">{{date('F-j-Y',strtotime($blog->date))}}</time></a></li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                    {{$blog->first_description}}
                                </p>
                                <blockquote>
                                    <p>
                                        {{$blog->middle_description}}
                                    </p>
                                </blockquote>

                                <p>
                                    {{$blog->last_description}}
                                </p>


                            </div>

                            <div class="entry-footer">
                                <i class="bi bi-folder"></i>
                                <ul class="cats">
                                    <li><a href="#">Author : </a></li>
                                    <li><a href="#">{{$blog->author}}</a></li>
                                </ul>

                                <i class="bi bi-tags"></i>
                                <ul class="tags">
                                    <li><a href="#">Date : </a></li>
                                    <li><a href="#">{{date('F-j-Y',strtotime($blog->date))}}</a></li>
                                </ul>
                            </div>

                        </article><!-- End blog entry -->



                    </div><!-- End blog entries list -->

                    <div class="col-lg-4">

                        <div class="sidebar">

                            <h3 class="sidebar-title">Search</h3>
                            <div class="sidebar-item search-form">
                                <form action="">
                                    <input type="text">
                                    <button type="submit"><i class="bi bi-search"></i></button>
                                </form>
                            </div><!-- End sidebar search formn-->


                            <h3 class="sidebar-title">Recent Blog Posts</h3>
                            <div class="sidebar-item recent-posts">
                                @foreach($postBlogs as $postBlog)
                                    <div class="post-item clearfix">
                                        <img src="{{asset($postBlog->image)}}" alt="">
                                        <h4><a href="{{route('blog-details',['id'=>$postBlog->id])}}">{{$postBlog->blog_title}}</a></h4>
                                        <time datetime="2020-01-01">{{date('F-j-Y',strtotime($postBlog->date))}}</time>
                                    </div>
                                @endforeach

                            </div><!-- End sidebar recent posts-->


                        </div><!-- End sidebar -->

                    </div><!-- End blog sidebar -->

                </div>

            </div>
        </section><!-- End Blog Single Section -->

    </main>
@endsection
