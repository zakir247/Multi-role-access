<!DOCTYPE html>
<html lang="en">


<head>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Admin template that can be used to build dashboards for CRM, CMS, etc." />
    <meta name="author" content="Potenza Global Solutions" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- app favicon -->
{{--    <link rel="shortcut icon" href="{{ asset('admin-assets/img/favicon.ico') }}">--}}
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- plugin stylesheets -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/css/vendors.css') }}" />
    <!-- app style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/css/style.css') }}" />
</head>

<body class="bg-white">
<!-- begin app -->
<div class="app">
    <!-- begin app-wrap -->
    <div class="app-wrap">
        <!-- begin pre-loader -->
        <div class="loader">
            <div class="h-100 d-flex justify-content-center">
                <div class="align-self-center">
                    <img src="{{ asset('admin-assets/img/loader/loader.svg') }}" alt="loader">
                </div>
            </div>
        </div>
        <!-- end pre-loader -->

        @yield('content')
    </div>
    <!-- end app-wrap -->
</div>
<!-- end app -->



<!-- plugins -->
<script src="{{ asset('admin-assets/js/vendors.js') }}"></script>

<!-- custom app -->
<script src="{{ asset('admin-assets/js/app.js') }}"></script>
</body>


</html>
