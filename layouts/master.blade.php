<!DOCTYPE html>
<html>
<head lang="{{ LaravelLocalization::setLocale() }}">
    <meta charset="UTF-8">
    @section('meta')
        <meta name="description" content="{{ Setting::get('core::site-description') }}" />
    @show
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @section('title'){{ Setting::get('core::site-name') }}@show
    </title>
    <link rel="shortcut icon" href="{{ theme_url() }}/favicon.ico">

    <?php if (App::environment() == 'local'): ?>
    <link rel="stylesheet" href="{{ theme_url() }}/css/dist/bootstrap.min.css" media="screen">
    <link rel="stylesheet" href="{{ theme_url() }}/css/prism.css">
    <link rel="stylesheet" href="{{ theme_url() }}/css/bootswatch.css">
    <?php else: ?>
    <link rel="stylesheet" href="{{ theme_url() }}/css/dist/all.min.css">
    <?php endif; ?>
    {!! Menu::style() !!}
</head>
<body>

@include('partials.navigation')

<div class="container">
    @yield('content')
</div>
@include('partials.footer')

<?php if (App::environment() == 'local'): ?>
<script src="{{ theme_url() }}/js/dist/jquery.min.js"></script>
<script src="{{ theme_url() }}/js/bootstrap.min.js"></script>
<script src="{{ theme_url() }}/js/prism.js"></script>
<?php else: ?>
<script src="{{ theme_url() }}/js/dist/all.min.js"></script>
<?php endif; ?>
@yield('scripts')
</body>
</html>
