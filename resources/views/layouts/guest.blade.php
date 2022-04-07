<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport"       content="width=device-width, initial-scale=1">
<meta name="csrf-token"     content="{{ csrf_token() }}">
<title>{{ config('app.name', 'Edatsu - Official Website') }}</title>
<meta name="viewport"       content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="title"          content="Edatsu - Hire top 1% talents in Africa">
<meta name="keyword"        content="Software Development, Blockchain, Web Themes, Payment processing, Product Management, Fintech, Dapps, NFT, Digital Marketplace, Mobile Apps">
<meta name="description"    content="Build and scale your business with top1% talents in Africa">
<!--headers-->
<meta property="og:url"           content="https://www.edatsu.com" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="Hire top 1% talents"/>
<meta property="og:description"   content="Build and scale your business with top1% talents in Africa
"/>
<meta property="og:image"         content="https://www.edatsu.com/public/assets/business_build.png" />
<meta property="fb:app_id"        content="2613571815361091"/>
<!--google api meta tag-->
<meta name="google-signin-scope" content="profile email">
<meta name="google-signin-client_id" content="964276485358-nfai8keb6d2cjoum9chqejnf6ibj3hca.apps.googleusercontent.com">

<meta name="robots" content="index, follow">
<meta name="language" content="English">
<meta name="revisit-after" content="7 days">
<meta name="author" content="Edatsu Technology Ltd">

<!-- Favicons -->
<link rel="apple-touch-icon" sizes="57x57" href="{{asset('assets/logo/apple-icon-57x57.png')}}">
<link rel="apple-touch-icon" sizes="60x60" href="{{asset('assets/logo/apple-icon-60x60.png')}}">
<link rel="apple-touch-icon" sizes="72x72" href="{{asset('assets/logo/apple-icon-72x72.png')}}">
<link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/logo/apple-icon-76x76.png')}}">
<link rel="apple-touch-icon" sizes="114x114" href="{{asset('assets/logo/apple-icon-114x114.png')}}">
<link rel="apple-touch-icon" sizes="120x120" href="{{asset('assets/logo/apple-icon-120x120.png')}}">
<link rel="apple-touch-icon" sizes="144x144" href="{{asset('assets/logo/apple-icon-144x144.png')}}">
<link rel="apple-touch-icon" sizes="152x152" href="{{asset('assets/logo/apple-icon-152x152.png')}}">
<link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/logo/apple-icon-180x180.png')}}">
<link rel="icon" type="image/png" sizes="192x192"  href="{{asset('assets/logo/android-icon-192x192.png')}}">
<link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/logo/favicon-32x32.png')}}">
<link rel="icon" type="image/png" sizes="96x96" href="{{asset('assets/logo/favicon-96x96.png')}}">
<link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/logo/favicon-16x16.png')}}">

<link rel="manifest" href="/manifest.json">

<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="public/assets/logo/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

<link rel="icon" type="image/png" href="favicon.ico">
<link rel="manifest" href="manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="assets/icon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

<meta name="google-site-verification" content="5yd2P0GLaI1PsW41GB_D-xe8yFrop58J4FbJKE79Z3w" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="icon" href="public/assets/edatsu_logo_favicon2.png" type="image/icon" >

 <!-- Latest compiled and minified CSS -->
 <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link type="text/css" rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;800&display=swap" rel="stylesheet"> 
<!--google login url-->
<!-- <script src="https://apis.google.com/js/api:client.js"></script> -->
<!--auto ads-->
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7365396698208751" crossorigin="anonymous"></script>
<!--bootstrap-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('css/core_app.css') }}">
<!-- Scripts -->
<script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
<!--bootstrap js-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script src="{{asset('javascript/script.js')}}"></script>
</html>
