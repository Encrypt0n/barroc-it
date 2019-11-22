@extends('app')
@section('content')
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
    </style>
</head>
<body>
@include('cookieConsent::index')
<div class="position-ref full-height">
    <div class="main-content-container">
        <div class="content-splitter-left">
            <img class="main-logo" src="{{ asset('storage/img/Logo6_groot.png') }}" alt="logo6_groot">
        </div>
        <div class="content-splitter-right">
            <h1>We are</h1>
            <h1>Barroc Intens</h1>
        </div>
    </div>
    <div class="product-content-container">
        <div class="product-splitter-text">
            <div class="product-splitter-text-container">
                <h2>heerl<span class="highlighted-i">I</span>k</h2>
                <h2>wakkere</h2>
                <h2>koffie</h2>
            </div>
            <p>Barroc Intens Italian Deluxe</p>
        </div>
        <div class="product-splitter-img">
            <img class="product-img" src="{{ asset('storage/img/bit-deluxe.png') }}" alt="bit-deluxe">
        </div>
    </div>
    <div class="product-content-container">
        <div class="product-splitter-img">
            <img class="product-img" src="{{ asset('storage/img/bit-light.png') }}" alt="bit-light">
        </div>
        <div class="product-splitter-text">
            <div class="product-splitter-text-container">
                <h2>vl<span class="highlighted-i">I</span>mmend</h2>
                <h2>lekkere</h2>
                <h2>koffie</h2>
            </div>
            <p>Barroc Intens Italian Light</p>
        </div>
    </div>
    <div class="product-content-container">
        <div class="product-splitter-machines">
            <h2><span class="highlighted-dash">-</span> Automaten <span class="highlighted-dash">-</span></h2>
            <div class="product-splitter-machines-container">
                <div class="product-splitter-machines-container-horizontal">
                    <h3>Barroc Intens Italian Light</h3>
                    <h3>Barroc Intens Italian</h3>
                </div>
                <div class="product-splitter-machines-container-horizontal">
                    <h3>Barroc Intens Italian Deluxe</h3>
                    <h3>Barroc Intens Italian Deluxe Special</h3>
                </div>
            </div>
        </div>
        <div class="product-splitter-beans">

        </div>
    </div>
</div>
</body>
</html>
@endsection
