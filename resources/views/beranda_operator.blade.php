@extends('app_adminkit_operator')

@section('content-beranda_operator')
    <div class="">
	<h1 class="h3 mb-3 mt-4"><b>Beranda</b></h1>
	<div class="row">
		<div class="col-lg-12">
			<div class="card" style="height: 50px;">
				<div class="card-header">
					<h5 class="card-title mb-0 text-success" style="font-family: Poppins, sans-serif; font-weight: 400; font-style: normal;">Halo {{ Auth::user()->name }} Selamat datang di SISMA ILKOM!</h5>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection