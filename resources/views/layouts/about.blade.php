@extends('layouts.basic')

@once
    @section('css')
        <link rel="stylesheet" type="text/css" href="{{ asset('css/@@about/include.css') }}" />
    @endsection
@endonce

@section('body')
<body>
    @include('includes.about.header')
    <main>
        @yield('about')
    </main>
    @include('includes.about.footer')
</body>
@endsection
