<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-blank.html" />

	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

	<title>Sita Fasilkom</title>

	<link href="{{asset('adminkit/css/app.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

	<style>
		.pagination {
			display: flex;
			justify-content: right;
			list-style: none;
		}
		.pagination .page-item {
			margin: 0 5px;
		}
	</style>
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar collapsed">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="{{route('dashboard_dosen')}}">
					<img src="{{asset('adminkit/img/photos/SITA FASILKOM.png')}}" class="img-fluid">
        		</a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
					</li>

					<li class="sidebar-item {{Route::is('dashboard_dosen')?'active':''}}">
						<a class="sidebar-link" href="{{route('dashboard_dosen')}}">
              				<i class="align-middle" data-feather="home"></i> <span class="align-middle">Dashboard</span>
            			</a>
					</li>

					<li class="sidebar-item {{Route::is('topik_penawaran_dosen')?'active':''}}">
						<a class="sidebar-link" href="{{route('topik_penawaran_dosen')}}">
              				<i class="align-middle" data-feather="file"></i> <span class="align-middle">Topik Penawaran</span>
            			</a>
					</li>

					<li class="sidebar-item {{Route::is('repository_dosen')?'active':''}}">
						<a class="sidebar-link" href="{{route('repository_dosen')}}">
              				<i class="align-middle" data-feather="folder"></i> <span class="align-middle">Repository</span>
            			</a>
					</li>

			</div>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
          <i class="hamburger align-self-center"></i>
        </a>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="bell"></i>
									<span class="indicator">!</span>
								</div>
							</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                				<i class="align-middle" data-feather="settings"></i>
              				</a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                				<img src="{{asset('adminkit/img/avatars/avatar.jpg')}}" class="avatar img-fluid rounded me-1" alt="" />
								<span class="text-dark">{{ Auth::user()->name }}</span>
              				</a>
							<div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
								<a class="dropdown-item" href='logout'>
									<i class="align-middle me-1" data-feather="log-out"></i>Log out
								</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>

			<div class="container-fluid" style="
				margin-left: 20px;">
				@yield('content-dashboard_dosen')
			</div>

			<div class="container-fluid" style="
				margin-left: 20px;">
				@yield('content-topik_penawaran_dosen')
			</div>

			<div class="container-fluid" style="
				margin-left: 20px;">
				@yield('content-repository_dosen')
			</div>

		</div>
	</div>

	<script src="{{asset('adminkit/js/app.js')}}"></script>

	<script>
        $(document).ready(function() {
            $('#datatables-reponsive').DataTable();
        });
    </script>

</body>

</html>