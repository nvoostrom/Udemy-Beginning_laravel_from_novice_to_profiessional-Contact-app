<!DOCTYPE html>
<html lang="en">
<!-- head -->
@include('layouts.head')

<body>
    <!-- navbar -->
    @include('layouts.navbarPublic')
    <!-- content -->
    @yield('content')
    <!-- scripts -->
    @include('layouts.footer')
    @include('layouts.script')

</body>

</html>
