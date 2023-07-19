<!DOCTYPE html>
<html lang="en">

<head>
    {{-- use meta --}}
    @include('includes.frontsite.meta')
    {{-- end use meta --}}

    <title>@yield('title') | MeetDoctor</title>

    {{-- use style --}}
    @stack('before-style')
        @include('includes.frontsite.style')
    @stack('after-style')
    {{-- end use style --}}
</head>

<body>
    {{-- use header --}}
    @include('components.frontsite.header')
    {{-- end use header --}}

    {{-- content --}}
    @yield('content')
    {{-- end content --}}

    {{-- use footer --}}
    @include('components.frontsite.footer')
    {{-- end use footer --}}

    {{-- use script --}}
    @stack('before-script')
        @include('includes.frontsite.script')
    @stack('after-script')
    {{-- end use script --}}

    {{-- use modal --}}
    {{-- if you have modal --}}

    {{-- end use modal --}}
</body>

</html>
