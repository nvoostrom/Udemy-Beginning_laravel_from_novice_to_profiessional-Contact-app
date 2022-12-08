<!DOCTYPE html>
<html lang="en">
 @yield('head')
  <body>
    <!-- navbar -->
    @yield('navbar')

    @yield('content')

    <script src="
    {{asset('js/jquery.min.js') }}"></script>
    <script src="
    {{asset('js/popper.min.js') }}"></script>
    <script src="
    {{asset('js/bootstrap.min.js') }}"></script>
  </body>
</html>