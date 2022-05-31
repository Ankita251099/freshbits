<head>
    <meta charset="utf-8">
    <title>Lexmos</title>
    <meta name="author" content="Caprus Digital">
    <meta name="theme-color" content="#0c2f68">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('img/favicon.png')}}" rel="shortcut icon" type="image/x-icon" />
    <link href="{{ asset('img/favicon.png')}}" rel="icon" type="image/x-icon" />
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600'>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/skin/default_skin/css/theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/admin-tools/admin-forms/css/admin-forms.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/admin-tools/admin-forms/css/custom.css') }}">
    <!-- <link rel="shortcut icon" href="{{ URL::asset('assets/img/logos/fevicon.png') }}"> -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('vendor/plugins/datatables/media/css/datatables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('vendor/plugins/select2/css/core.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/js/sweetalert.css') }}">
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.css" />
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid-theme.min.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/castom.css') }}">
    <link rel="stylesheet" type="text/css" media="all" href="{{ URL::asset('vendor/daterangepicker.css') }}" />
    @yield('css')
</head>