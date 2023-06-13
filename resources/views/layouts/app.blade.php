<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="description" content="@yield('description','Chazak Website')">
    <meta name="keywords" content="@yield('keywords','Chazak Tech')">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{!! asset('css/app.css') !!}" rel="stylesheet">

    <title>@yield('title')</title>
</head>
<body >
    <div class="container">

        <div class="header">

         @yield('header')
        </div>
        <!-- Main content -->
        <section class="content">

          @yield('content')

        </section>
        <!-- /.content -->
      <!-- /.content-wrapper -->

      <footer class="main-footer text-sm clearfix">

      </footer>
    </div>
    <!-- ./wrapper -->


    @yield('before_scripts')
    @stack('before_scripts')


    @yield('after_scripts')
    @stack('after_scripts')

    <!-- JavaScripts -->
    {{-- <script src="{{ mix('js/app.js') }}"></script> --}}
</body>
</html>
