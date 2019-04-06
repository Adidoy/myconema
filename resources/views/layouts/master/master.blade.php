<!DOCTYPE html>
<html lang="en">
    @include('layouts.master.head')
    <body>
        @include('layouts.master.banner')
        @include('layouts.master.nav')
        <br /><br />
        @yield('content')
        <br /><br />
        @include('layouts.master.footer')
    </body>
</html>
