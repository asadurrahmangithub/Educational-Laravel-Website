<footer>

    <div class="footer-grid">

        <div class="grid-item">

            <div class="footer-logo">
                <img src="{{asset($pageFooter->image)}}" style="height: 60px; width: auto" alt="educator logo white">
            </div>


            <p class="footer-text">
                {{$pageFooter->description}}
            </p>

            <div class="social-link">
                @if($pageFooter->facebook)
                    <a href="{{$pageFooter->facebook}}">
                        <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                @endif

                @if($pageFooter->linkedin)
                    <a href="{{$pageFooter->linkedin}}">
                        <ion-icon name="logo-linkedin"></ion-icon>
                    </a>
                @endif

                    @if($pageFooter->instagram)
                    <a href="{{$pageFooter->instagram}}">
                        <ion-icon name="logo-instagram"></ion-icon>
                    </a>
                    @endif

                    @if($pageFooter->twitter)
                        <a href="{{$pageFooter->twitter}}">
                            <ion-icon name="logo-twitter"></ion-icon>
                        </a>
                    @endif
                    @if($pageFooter->youtube)
                        <a href="{{$pageFooter->youtube}}">
                            <ion-icon name="logo-youtube"></ion-icon>
                        </a>
                    @endif
            </div>

        </div>

        <ul class="grid-item">

            <h4 class="item-heading">Our Link</h4>

            <li class="list-item">
                <a href="#home">Home</a>
            </li>

            <li class="list-item">
                <a href="#about">About Us</a>
            </li>

            <li class="list-item">
                <a href="#course">Courses</a>
            </li>

            <li class="list-item">
                <a href="#blog">Blog</a>
            </li>

            <li class="list-item">
                <a href="#contact">Contact Us</a>
            </li>

        </ul>

        <ul class="grid-item">

            <h4 class="item-heading">Other Link</h4>

            <li class="list-item">
                <a href="#">Instructor</a>
            </li>

            <li class="list-item">
                <a href="#">FAQ</a>
            </li>

            <li class="list-item">
                <a href="#">Event</a>
            </li>

            <li class="list-item">
                <a href="#">Privacy Policy</a>
            </li>

            <li class="list-item">
                <a href="#">Term & Condition</a>
            </li>

        </ul>

        <ul class="grid-item">

            <h4 class="item-heading">Contact Information</h4>

            <li class="list-item">
                <a href="#">Address
                    <p class="mt-1 footer-right">{{$pageFooter->address}}</p>
                </a>
            </li>
            <li class="list-item">
                <a href="#">Contact Number
                    <p class="mt-1 footer-right">{{$pageFooter->number}}</p>
                </a>
            </li>
            <li class="list-item">
                <a href="#">Gmail
                    <p class="mt-1 ">{{$pageFooter->email}}</p>
                </a>
            </li>

        </ul>

    </div>

    <p class="copyright">
        Copyright © 2022 <a href="https://www.linkedin.com/in/asadurrahman1866/">Asadur Rahman</a>. All rights reserved.
    </p>

</footer>
