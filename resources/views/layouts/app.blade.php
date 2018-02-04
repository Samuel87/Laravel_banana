<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @component('components.head')@endcomponent

</head>
<body>
    <div id="app">
        @component('components.navbar')@endcomponent

        @yield('content')
    </div>

    @component('components.footer')@endcomponent

    <!-- Scripts -->
    @component('components.javascripts')@endcomponent

</body>
</html>
