<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>@yield('title',config('app.name'))</title>
    <!-- Description, Keywords and Author -->
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @include('front.layouts.inc.head')

</head>

<body>

<div class="wrapper">

    <!-- header -->
    @include('front.layouts.inc.header')

    @yield('content')

    <!-- footer -->
    @include('front.layouts.inc.footer')
</div>



</body>
</html>
