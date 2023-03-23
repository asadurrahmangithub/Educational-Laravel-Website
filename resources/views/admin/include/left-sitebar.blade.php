<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo text-center text-white" href="{{route('adminDashboard')}}"><h1>IST Diploma</h1></a>
        <a class="sidebar-brand brand-logo-mini text-center text-white" href="{{route('adminDashboard')}}"><h1>IST</h1></a>
    </div>
    <ul class="nav">
        <li class="nav-item profile">
            <div class="profile-desc">
                <div class="profile-pic">
                    <div class="count-indicator">
                        <img class="img-xs rounded-circle " src="{{asset($accountImage->image)}}" alt="">
                        <span class="count bg-success"></span>
                    </div>
                    <div class="profile-name">
                        <h5 class="mb-0 font-weight-normal">{{ Auth::user()->name }}</h5>
                        <span>Admin Member</span>
                    </div>
                </div>
                <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
                <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                    <a href="{{route('account-setting')}}" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-settings text-primary"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="{{route('all.user')}}" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-calendar-today text-success"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">User list</p>
                        </div>
                    </a>
                </div>
            </div>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Admin Panel</span>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('adminDashboard')}}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Home Slider</span>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
                <span class="menu-title">Slider Section</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('home-slider')}}">Add Slider</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Course Details</span>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#course-category" aria-expanded="false" aria-controls="course-category">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
                <span class="menu-title">Course Category</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="course-category">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('course-header')}}">Category Header</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('add-course')}}">Add Category</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('manage-course')}}">Manage Category</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#online-course" aria-expanded="false" aria-controls="course-category">
              <span class="menu-icon">
                <i class="mdi mdi-counter"></i>
              </span>
                <span class="menu-title">Course Section</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="online-course">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('header-section')}}">Course Header</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('course-section')}}">Add Course</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('manage-course-section')}}">Manage Course</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">About Info</span>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#about-info" aria-expanded="false" aria-controls="about-info">
              <span class="menu-icon">
               <i class="mdi mdi-table-large"></i>
              </span>
                <span class="menu-title">About Section</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="about-info">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('about-header')}}">About Header</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('left-section')}}">Left Site Image</a></li>

                </ul>
            </div>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Our Event</span>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#event" aria-expanded="false" aria-controls="event">
              <span class="menu-icon">
               <i class="mdi mdi-chart-bar"></i>
              </span>
                <span class="menu-title">Event Section</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="event">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('event-header')}}">Section Header</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('add-event')}}">Add Event</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('manage-event')}}">Manage Event</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Our Features</span>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#mission" aria-expanded="false" aria-controls="mission">
              <span class="menu-icon">
               <i class="mdi mdi-contacts"></i>
              </span>
                <span class="menu-title">Core Features</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="mission">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('features-header')}}">Features Header</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('features-item')}}">Add Features</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('manage-features')}}">Manage Features</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Our Instructor</span>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#instructor" aria-expanded="false" aria-controls="instructor">
              <span class="menu-icon">
               <i class="mdi mdi-security"></i>
              </span>
                <span class="menu-title">Instructor Section</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="instructor">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('instructor-header')}}">Section Header</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('add-instructor')}}">Add Instructor</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('manage-instructor')}}">Manage Instructor</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Our Testimonial</span>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#testimonial" aria-expanded="false" aria-controls="testimonial">
              <span class="menu-icon">
               <i class="mdi mdi-security"></i>
              </span>
                <span class="menu-title">Testimonial Section</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="testimonial">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('add-testimonial')}}">Add Testimonial</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Our Blog</span>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#blog" aria-expanded="false" aria-controls="blog">
              <span class="menu-icon">
               <i class="mdi mdi-blogger"></i>
              </span>
                <span class="menu-title">Blog Section</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="blog">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('blog-header')}}">Blog Header</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('add-blog')}}">Add Blog</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('manage-blog')}}">Manage Blog</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Our Setting</span>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#setting" aria-expanded="false" aria-controls="setting">
              <span class="menu-icon">
               <i class="mdi mdi-account-settings"></i>
              </span>
                <span class="menu-title">All Setting</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="setting">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('page-header')}}">Page Header</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('page-footer')}}">Page Footer</a></li>
                </ul>
            </div>
        </li>
    </ul>
</nav>
<!-- partial -->
