@extends('layouts.basic')

@once
    @section('css')
        <link rel="stylesheet" type="text/css" href="{{ asset('css/@@about/include.css') }}" />
    @endsection
@endonce

@section('body')
<body class="d-flex flex-column justify-content-between min-vh-100">
    @include('includes.about.header')

    <main class="flex-grow-1 pb-1">
        <section class="container">
            @yield('about')
        </section>
    </main>

    @include('includes.about.footer')
    @include('includes.about.cookie')

    <script src="{{ asset('js/about/header.js') }}"></script>
</body>
@endsection
