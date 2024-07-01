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

	<!-- font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

	<link rel="shortcut icon" href="https://siakad.unej.ac.id/images/layouts/unej-icon.svg">

	<title>SISMA ILKOM</title>

	<link href="{{asset('adminkit/css/app.css')}}" rel="stylesheet">

	<style>
		.pagination {
			display: flex;
			justify-content: right;
			list-style: none;
		}
		.pagination .page-item {
			margin: 0 5px;
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
            color: white;
            text-decoration: none;
            font-size: 12px;
            border-radius: 5px;
			margin: 0 10px;
        }

        .btn svg {
            margin-bottom: 4px;
            width: 24px;
            height: 24px;
        }
		.btn .feather {
    		height: 35px;
    		width: 35px;
		}

		.btn-info{
			display: inline-flex;
			flex-direction: row;
			align-items: center;
			justify-content: center;
			padding: 5px 15px;
			border: none;
			font-size: 16px;
			color: white;
			text-decoration: none;
			font-size: 14px;
			border-radius: 5px;
			width: 70px;
			height: 40px;
		}
		.mt-3 {
            margin-top: 1rem;
        }

		.btn-fixed-right {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
        }

		 /* Style for the modal */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            padding-top: 60px;
        }

        /* Modal Content/Box */
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto; /* 15% from the top and centered */
            padding: 20px;
            border: 1px solid #888;
            width: 35%; /* Could be more or less, depending on screen size */
        }

		/* The Close Button */
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover, .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

		.actions {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
            height: 100%;
        }
        .primary-action {
            margin-bottom: 20px;
        }
        .secondary-actions {
            display: flex;
            gap: 10px;
        }
	</style>
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar collapsed">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="{{route('beranda_operator')}}">
					<img src="{{asset('adminkit/img/photos/SISMA ILKOM.png')}}" class="img-fluid">
        		</a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
					</li>

					<li class="sidebar-item {{Route::is('beranda_operator')?'active':''}}">
						<a class="sidebar-link" href="{{route('beranda_operator')}}">
              				<i class="align-middle" data-feather="home"></i> <span class="align-middle">Beranda</span>
            			</a>
					</li>

					<li class="sidebar-item {{Route::is('topik_penawaran_operator')?'active':''}}">
						<a class="sidebar-link" href="{{route('topik_penawaran_operator')}}">
              				<i class="align-middle" data-feather="file"></i> <span class="align-middle">Topik Penawaran</span>
            			</a>
					</li>

					<li class="sidebar-item {{Route::is('repository_operator')?'active':''}}">
						<a class="sidebar-link" href="{{route('repository_operator')}}">
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
				@yield('content-beranda_operator')
			</div>

			<div class="container-fluid" style="
				margin-left: 20px;">
				@yield('content-topik_penawaran_operator')
			</div>

			<div class="container-fluid" style="
				margin-left: 20px;">
				@yield('content-repository_operator')
			</div>

			<div class="container-fluid" style="
				margin-left: 20px;">
				@yield('content-agenda_seminar_proposal_operator')
			</div>

			<div class="container-fluid" style="
				margin-left: 20px;">
				@yield('content-agenda_sidang_skripsi_operator')
			</div>

			<div class="container-fluid" style="
				margin-left: 20px;">
				@yield('content-menambahkan_agenda_sempro_operator')
			</div>

			<div class="container-fluid" style="
				margin-left: 20px;">
				@yield('content-menambahkan_agenda_sidang_skripsi_operator')
			</div>

			<div class="container-fluid" style="
				margin-left: 20px;">
				@yield('content-edit_agenda_sempro_operator')
			</div>

			<div class="container-fluid" style="
				margin-left: 20px;">
				@yield('content-menambahkan_agenda_sidskrip_operator')
			</div>

		</div>
	</div>

	<script src="{{asset('adminkit/js/app.js')}}"></script>

	<script>
        // Inisialisasi Feather Icons
        feather.replace();
    </script>

	<script>
	// Get the modal
    var modal = document.getElementById("myModal");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks any link, open the modal 
    document.querySelectorAll(".modalLink").forEach(link => {
        link.onclick = function(event) {
            event.preventDefault();
            var content = this.getAttribute("data-content");
            document.getElementById("modalText").innerText = content;
            modal.style.display = "block";
        }
    });

    // When the user clicks on <span> (x), close the modal
    // span.onclick = function() {
    //     modal.style.display = "none";
    // }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
	</script>

	<script>
        document.addEventListener('DOMContentLoaded', function() {
            flatpickr("#datetimepicker-dashboard", {
                // Konfigurasi Flatpickr
                inline: true,
                dateFormat: "Y-m-d H:i",
            });
        });
    </script>

	<script>
        $(document).ready(function() {
            $('#datatables-reponsive').DataTable();
        });
    </script>

</body>

</html>