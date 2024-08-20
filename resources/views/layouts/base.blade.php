<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    @if (env('IS_DEMO'))
        <meta name="keywords"
            content="software, restaurant, app" />
        <meta name="description"
            content="Software" />
        <meta itemprop="name" content="Software " />
        <meta itemprop="description"
            content="Software" />
        <meta itemprop="image"
            content="" />
        <meta name="twitter:card" content="product" />
        <meta name="twitter:site" content="@flores " />
        <meta name="twitter:title" content="Software" />
        <meta name="twitter:description"
            content="An app" />
        <meta name="twitter:creator" content="@flores" />
        <meta name="twitter:image"
            content="" />
        <meta property="fb:app_id" content="655968634437471" />
        <meta property="og:title" content="Software" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="" />
        <meta property="og:image"
            content="" />
        <meta property="og:description"
            content="Software" />
        <meta property="og:site_name" content="Creative Tim" />
    @endif

    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets') }}/img/francos.png" />
    <link rel="icon" type="image/png" href="{{ asset('assets') }}/img/favicon.png" />
    <title>Franco's</title>
    <!-- Fonts and icons -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('assets') }}/css/nucleo-icons.css" rel="stylesheet" />
    <link href="{{ asset('assets') }}/css/nucleo-svg.css" rel="stylesheet" />

    <!-- Font Awesome Icons -->
    {{-- <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script> --}}
    <!-- Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.5/umd/popper.min.js"></script>

    <!-- Main Styling -->
    <link href="{{ asset('assets') }}/css/styles.css?v=1.0.3" rel="stylesheet" />

    @vite('resources/css/app.css')

    @livewireStyles

    @stack('after-styles')

</head>

<body class="m-0 font-sans antialiased font-normal text-size-base leading-default bg-gray-50 text-slate-500">
    {{ $slot }}

    @livewireScripts
</body>

<!-- plugin for charts  -->
<script src="{{ asset('assets') }}/js/plugins/chartjs.min.js" async></script>
<!-- plugin for scrollbar  -->
<script src="{{ asset('assets') }}/js/plugins/perfect-scrollbar.min.js" async></script>
<!-- github button -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- main script file  -->
<script src="{{ asset('assets') }}/js/soft-ui-dashboard-tailwind.js?v=1.0.3" async></script>

@stack('after-scripts')

</html>
