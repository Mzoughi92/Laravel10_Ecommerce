<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ !empty($meta_title) ? $meta_title : '' }} - 3ATTAR</title>

    @if(!empty($meta_description))
    <meta name="description" content="{{ $meta_description }}">
    @endif
    
    @if(!empty($meta_keywords))
    <meta name="keywords" content="{{ $meta_keywords }}">
    @endif

    @php
     $getSystemSettingApp = App\Models\SystemSettingModel::getSingle();   
    @endphp
    

    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ $getSystemSettingApp->getFevicon() }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('assets/images/Untitled-2.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('assets/images/Untitled-2.png')}}">
    <link rel="manifest" href="{{ url('assets/images/icons/site.html')}}">
    <link rel="mask-icon" href="{{ url('assets/images/icons/safari-pinned-tab.svg')}}" color="#666666">
    <link rel="shortcut icon" href="{{ url('assets/images/Untitled-2.png')}}">
    <meta name="apple-mobile-web-app-title" content="Molla">
    <meta name="application-name" content="Molla">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="assets/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ url('assets/css/plugins/owl-carousel/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{ url('assets/css/plugins/magnific-popup/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ url('assets/css/plugins/nouislider/nouislider.css')}}">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{ url('assets/css/style.css')}}">

 
</head>
<body>