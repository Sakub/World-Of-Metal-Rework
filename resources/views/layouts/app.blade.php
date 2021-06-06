@include('partials.header')
@include('partials.navbar')
@include('partials.modals.login')
@include('partials.modals.register')
    <main>
        @yield('content')
    </main>
@include('partials.footer')