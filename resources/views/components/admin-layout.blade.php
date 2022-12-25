<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Workaholics</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link rel="icon" type="image/x-icon" href="{{ asset('img/blue-lamp.png') }}">

    <!-- Chartist -->
    <link rel="stylesheet" href="./plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="./plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    <!-- Custom Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('adminpanel/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/templatemo-tale-seo-agency.css') }}" rel="stylesheet">
</head>

<body>
    <preloader></preloader>
    <x-admin-header></x-admin-header>
    <main id="main-wrapper">
        <x-admin-sidebar></x-admin-sidebar>
        {{ $slot }}
    </main>

    <script src="{{ asset('adminpanel/plugins/common/common.min.js') }}"></script>
    <script src="{{ asset('adminpanel/js/custom.min.js') }}"></script>
    <script src="{{ asset('adminpanel/js/settings.js') }}"></script>
    <script src="{{ asset('adminpanel/js/gleek.js') }}"></script>
    <script src="{{ asset('adminpanel/js/styleSwitcher.js') }}"></script>
</body>

</html>
