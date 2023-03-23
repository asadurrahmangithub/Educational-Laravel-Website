<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$pageHeader->meta_keyword}}</title>


    <!--
      - Bootstrap css link
    -->
    <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/bootstrap.css">

    <!--
      - custom css link
    -->
    <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/style.css">

    @yield('css')

    <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/media_queries.css">
    <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/animation.css">

    <!--
      - Favicon
    -->
    <link rel="shortcut icon" href="{{asset($pageHeader->icon)}}" />


    <!--
      - google font link
    -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700;800;900&family=Roboto:wght@400;500&display=swap"
        rel="stylesheet">

</head>

<body>

<!--
  - main container
-->

<div class="container">

    <!--
      - #HEADER
    -->

    @include('frontEnd.include.header')

    @yield('content')

    <!--
      - #FOOTER
    -->

    @include('frontEnd.include.footer')

</div>





<!--
  - custom js link
-->
<script src="{{asset('frontEnd')}}/assets/js/bootstrap.bundle.js"></script>

<script src="{{asset('frontEnd')}}/assets/js/script.js"></script>
@yield('js')

<!--
  - ionicon link
-->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
