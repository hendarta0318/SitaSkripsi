
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

	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-sign-in.html" />

	<title>Login</title>

	<link href="{{asset('adminkit/css/app.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<h1 class="h2">SITA</h1>
							<h5 class="lead">
								Sistem Informasi Tugas Akhir
							</h5>
							<h6 class="lead">
								Fakultas Ilmu Komputer
							</h6>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-3">
									@if($errors->any())
										<div class="alert alert-danger">
											<ul>
												@foreach($errors->all() as $item)
													<li>{{ $item }}</li>
												@endforeach
											</ul>
										</div>
									@endif
									<form action="" method="POST">
										@csrf
										<div class="mb-3">
											<label class="form-label">Email</label>
											<input class="form-control form-control-lg" value="{{old('email')}}" type="email" name="email" placeholder="Enter your email" />
										</div>
										
										<div class="mb-3">
											<label class="form-label">Password</label>
											<input class="form-control form-control-lg" type="password" name="password" placeholder="Enter your password" />
										</div>

										<div class="d-grid gap-2 mt-3">
											<button name="submit" type="submit" class="btn btn-lg btn-primary">Sign in</button>
											<!-- <a href="#" class="btn btn-lg btn-primary">Sign in</a> -->
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

	<script src="{{asset('adminkit/js/app.js')}}"></script>

</body>

</html>