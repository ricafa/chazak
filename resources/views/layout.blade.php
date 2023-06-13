<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('backpack::inc.head')
</head>
<body class="hold-transition {{ config('backpack.base.skin') }} sidebar-mini">
	<script type="text/javascript">
		/* Recover sidebar state */
		(function () {
			if (Boolean(sessionStorage.getItem('sidebar-toggle-collapsed'))) {
				var body = document.getElementsByTagName('body')[0];
				body.className = body.className + ' sidebar-collapse';
			}
		})();
	</script>
    <!-- Site wrapper -->
    <div class="container">

    @include('backpack::inc.main_header')

      <!-- =============================================== -->

    @include('backpack::inc.sidebar')

    <!-- =============================================== -->
        <div class="header">
        <!-- Content Header (Page header) -->
         @yield('header')
        </div>
        <!-- Main content -->
        <section class="content">

          @yield('content')

        </section>
        <!-- /.content -->
      <!-- /.content-wrapper -->

      <footer class="main-footer text-sm clearfix">
        @include('backpack::inc.footer')
      </footer>
    </div>
    <!-- ./wrapper -->


    @yield('before_scripts')
    @stack('before_scripts')

    @include('backpack::inc.scripts')
    @include('backpack::inc.alerts')

    @yield('after_scripts')
    @stack('after_scripts')

    <!-- JavaScripts -->
    {{-- <script src="{{ mix('js/app.js') }}"></script> --}}
</body>
</html>
