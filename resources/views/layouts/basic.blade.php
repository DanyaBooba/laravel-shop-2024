<!DOCTYPE html>
<html lang="{{ App::currentLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    <link rel="apple-touch-icon" href="{{ asset('favicon.svg') }}">
    <link rel="manifest" href="{{ asset('manifest.webmanifest') }}">
    <link rel="manifest" href="{{ asset('manifest.json') }}">

    <meta name="theme-color" content="#fff" />
    <meta name="description" content="{{ env("APP_DESC") }}">
    <meta name="keywords" content="{{ env("APP_KEYWORDS") }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ env("APP_TITLE_SHORT") }}">
    <meta name="twitter:description" content="{{ env("APP_DESC") }}">
    <meta name="twitter:site" content="{{ env("APP_URL") }}">
    <meta name="twitter:image" content="{{ asset('favicon.ico') }}">
    <meta name="Author" content="{{ env("APP_AUTHOR") }}">

    <meta property="og:title" content="{{ env("APP_TITLE_SHORT") }}">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="{{ env("APP_TITLE_SHORT") }}">
    <meta property="og:description" content="{{ env("APP_DESC") }}">
    <meta property="og:url" content="{{ env("APP_URL") }}">
    <meta property="og:image" content="{{ asset('img/app/cap.jpg') }}">

    <meta name="robots" content="index,follow">
    <meta name="googlebot" content="index,follow">
    <meta name="google" content="nositelinkssearchbox">

    <title>@yield('head.title', config('app.name')) – {{ __('Магазинчик') }}</title>

    <x-head.metrika-js />

    <meta name="color-scheme" content="light dark">

    <link rel="stylesheet" id="css.light" href="{{ asset('css/@@light/light.css') }}" media="(prefers-color-scheme: light)">

    <link rel="stylesheet" id="css.dark" href="{{ asset('css/@@dark/dark.css') }}" media="(prefers-color-scheme: dark)">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vars.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" />

    @stack('css')

    <x-head.metrika />
</head>

@yield('body')

<script src="{{ asset('js/bootstrap.js') }}"></script>
@stack('js.include')
@stack('js.use')

</html>
