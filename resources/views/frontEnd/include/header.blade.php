<header>

    <nav class="navbar-menu">

        <div class="navbar-brand">
            <img src="{{asset($pageHeader->logo)}}" style="height: 60px; width: auto" alt="Educator Logo">
        </div>

        <ul class="navbar-nav-menu">

            <li class="nav-item">
                <a href="{{route('home.page')}}#home">Home</a>
            </li>
            <li class="nav-item">
                <a href="{{route('home.page')}}#about">About Us</a>
            </li>
            <li class="nav-item">
                <a href="{{route('all-course')}}">Courses</a>
            </li>
            <li class="nav-item">
                <a href="{{route('home.page')}}#instructor">Instructor</a>
            </li>
            <li class="nav-item">
                <a href="{{route('home.page')}}#blog">Blog</a>
            </li>
            <li class="nav-item">
                <a href="{{route('contact')}}">Contact Us</a>
            </li>

        </ul>

{{--        <button class="btn btn-primary">--}}
{{--            <p class="btn-text">IST Other Website</p>--}}
{{--            <span class="square"></span>--}}
{{--        </button>--}}

        <button class="nav-toggle-btn">
            <span class="one"></span>
            <span class="two"></span>
            <span class="three"></span>
        </button>

    </nav>

</header>
