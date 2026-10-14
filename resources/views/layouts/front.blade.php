<!DOCTYPE html>
<html lang="en" dir="ltr">
@include('layouts.partials.front-head')
<body>
    @include('layouts.partials.preloader')
    @include('layouts.partials.header')
    @yield('content')
    @include('layouts.partials.footer')
    @include('layouts.partials.front-scripts')
    @stack('scripts')
</body>
</html>