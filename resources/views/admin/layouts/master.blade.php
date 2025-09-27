<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>@yield('title')</title>
		@include('admin.layouts.head-links')
	</head>
	<body class="hold-transition sidebar-mini">
		<!-- Site wrapper -->
		<div class="wrapper">
			<!-- Navbar -->
			@include('admin.layouts.navbar')

			<!-- Sidebar -->
			@include('admin.layouts.sidebar')

            <section>

                @yield('admin_content')
            </section>
		
			<footer class="main-footer">
				<strong>Copyright &copy; 2024 Clinic Management All rights reserved.</strong>
			</footer>
		</div>
        	@include('admin.layouts.scripts')

			@yield('scripts')

	</body>
</html>
