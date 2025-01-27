<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('front.partials.head')

<body>
    @include('front.partials.frontHeader')

    <section class="section">
        <div class="pt-16">
            @yield('content')
        </div>
    </section>

    @include('front.partials.footer')
</body>
</html>
