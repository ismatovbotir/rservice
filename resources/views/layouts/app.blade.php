<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="images/favicon.png">
    <!-- Page Title  -->
    <title>@yield('title','RService')</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{asset('assets/css/dashlite.css?ver=2.4.0')}}">
    <link id="skin-default" rel="{{asset('stylesheet" href="assets/css/theme.css?ver=2.4.0')}}">
</head>

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            @auth()
            @include('layouts.sidebar')
            @endauth
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                @auth()
                @include('layouts.header')
                @endauth
                <!-- main header @e -->
                <!-- content @s -->
                
                
                @yield('content')
                
                
               
                <!-- content @e -->
                <!-- footer @s -->
                @auth
                @include('layouts.footer')
                @endauth
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    @auth
    @section('javascript')
    <script src="{{asset('assets/js/bundle.js?ver=2.4.0')}}"></script>
    <script src="{{asset('assets/js/scripts.js?ver=2.4.0')}}"></script>
    <script src="{{asset('assets/js/charts/gd-default.js?ver=2.4.0')}}"></script>
    @show
    @endauth
</body>

</html>