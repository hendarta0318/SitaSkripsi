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

	<title>Sita Fasilkom</title>

	<link href="{{asset('adminkit/css/app.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

	<style>
		.dataTables_length label {
			display: flex;
			align-items: center;
		}
		.dataTables_length select {
			margin: 0 0.5rem;
		}
		.dataTables_filter {
			display: flex;
			align-items: center;
		}
		.dataTables_filter input {
			margin-left: 49%;
		}

		.pagination {
			display: flex;
			justify-content: right;
			list-style: none;
		}
		.pagination .page-item {
			margin: 0 5px;
		}

		.btn {
            display: inline-flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 10px 20px;
            border: none;
            background-color: #F1416C;
            color: white;
            text-decoration: none;
            font-size: 12px;
            border-radius: 5px;
			 margin: 0 10px;
        }

        .btn svg {
            margin-bottom: 4px; /* Jarak antara ikon dan teks */
            width: 24px; /* Ubah ukuran ikon */
            height: 24px; /* Ubah ukuran ikon */
        }
		.btn .feather {
    		height: 35px;
    		width: 35px;
		}

	</style>
	
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar collapsed">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="{{route('dashboard_mahasiswa')}}">
					<img src="{{asset('adminkit/img/photos/SITA FASILKOM.png')}}" class="img-fluid">
        		</a>

				<ul class="sidebar-nav">
					<li class="sidebar-header"></li>

					<li class="sidebar-item {{Route::is('dashboard_mahasiswa')?'active':''}}">
						<a class="sidebar-link" href="{{route('dashboard_mahasiswa')}}">
              				<i class="align-middle" data-feather="home"></i> <span class="align-middle">Dashboard</span>
            			</a>
					</li>

					<li class="sidebar-item {{Route::is('topik_penawaran_mahasiswa')?'active':''}}">
						<a class="sidebar-link" href="{{route('topik_penawaran_mahasiswa')}}">
              				<i class="align-middle" data-feather="file"></i> <span class="align-middle">Topik Penawaran</span>
            			</a>
					</li>

					<li class="sidebar-item {{Route::is('usulan_pembimbing')?'active':''}}">
						<a class="sidebar-link" href="{{route('usulan_pembimbing')}}">
              				<i class="align-middle" data-feather="user"></i> <span class="align-middle">Usulan Pembimbing</span>
            			</a>
					</li>

					<li class="sidebar-item {{Route::is('repository')?'active':''}}">
						<a class="sidebar-link" href="{{route('repository')}}">
              				<i class="align-middle" data-feather="folder"></i> <span class="align-middle">Repository</span>
            			</a>
					</li>

					<li class="sidebar-item {{Route::is('seminar_proposal')?'active':''}}">
						<a class="sidebar-link" href="{{route('seminar_proposal')}}">
              				<i class="align-middle" data-feather="file"></i> <span class="align-middle">Seminar Proposal</span>
            			</a>
					</li>

					<li class="sidebar-item {{Route::is('sidang_skripsi')?'active':''}}">
						<a class="sidebar-link" href="{{route('sidang_skripsi')}}">
              				<i class="align-middle" data-feather="file"></i> <span class="align-middle">Sidang Skripsi</span>
            			</a>
					</li>

					<li class="sidebar-item {{Route::is('surat_tugas')?'active':''}}">
						<a class="sidebar-link" href="{{route('surat_tugas')}}">
              				<i class="align-middle" data-feather="file-text"></i> <span class="align-middle">Surat Tugas</span>
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
								<span class="text-dark">Nama Mahasiswa</span>
              				</a>

							<div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1" data-feather="user"></i> Profile</a>

								<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="log-out"></i>Log out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>

			<div class="container-fluid" style="
				margin-left: 20px;">
				@yield('content-dashboard_mahasiswa')
			</div>

			<div class="container-fluid" style="
				margin-left: 20px;
				margin-right: 20px">
				@yield('content-topik_penawaran_mahasiswa')
			</div>
		
			<div class="container-fluid" style="
				margin-left: 20px;">
				@yield('content-usulan_pembimbing')
			</div>

			<div class="container-fluid" style="
				margin-left: 20px;">
				@yield('content-repository')
			</div>

			<div class="container-fluid" style="
				margin-left: 20px;">
				@yield('content-seminar_proposal')
			</div>

			<div class="container-fluid" style="
				margin-left: 20px;">
				@yield('content-sidang_skripsi')
			</div>

			<div class="container-fluid" style="
				margin-left: 20px;">
				@yield('content-surat_tugas')
			</div>

		</div>
	</div>

	<script src="{{asset('adminkit/js/datatables.js')}}"></script>
	<script src="{{asset('adminkit/js/app.js')}}"></script>
	<script>
        // Inisialisasi Feather Icons
        feather.replace();
    </script>

</body>

</html>