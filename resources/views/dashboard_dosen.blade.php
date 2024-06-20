@extends('app_adminkit_dosen')

@section('content-dashboard_dosen')
    <div class="">
	<h1 class="h3 mb-3 mt-4"><b>Dashboard</b></h1>
	<div class="row">
		<div class="col-lg-12">
			<div class="card" style="height: 50px;">
				<div class="card-header">
					<h5 class="card-title mb-0">Halo {{ Auth::user()->name }} Selamat datang di SITA ILKOM</h5>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<!-- <div class="col-lg-4">
			<div class="card">
				<div class="card-header">
					<h5 class="card-title mb-0">Menempuh Skripsi</h5>
					<h2 class="card-title-mb-0" style="font-size: 40px; display: inline-block;"><b>0</b></h2>
					<h5 class="card-title-mb-0" style="font-size: 18px; display: inline-block; margin-left: 8px;">Mahasiswa</h5>
				</div>
			</div>
		</div> -->

		<!-- <div class="col-lg-4">
			<div class="card">
				<div class="card-header">
					<h5 class="card-title mb-0">Seminar Proposal</h5>
					<h2 class="card-title-mb-0" style="font-size: 40px; display: inline-block;"><b>0</b></h2>
					<h5 class="card-title-mb-0" style="font-size: 18px; display: inline-block; margin-left: 8px;">Mahasiswa</h5>
				</div>
			</div>
		</div> -->

		<!-- <div class="col-lg-4">
			<div class="card">
				<div class="card-header">
					<h5 class="card-title mb-0">Sidang Skripsi</h5>
					<h2 class="card-title-mb-0" style="font-size: 40px; display: inline-block;"><b>0</b></h2>
					<h5 class="card-title-mb-0" style="font-size: 18px; display: inline-block; margin-left: 8px;">Mahasiswa</h5>
				</div>
			</div>
		</div> -->

		<h1 class="h3 mb-3"><b>Daftar Mahasiswa Menempuh Skripsi</b></h1>
		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
					<div id="datatables-reponsive_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
						<div class="row mb-2">
							<div class="col-sm-12 col-md-6">
								<div class="dataTables_length" id="datatables-reponsive_length"></div>
							</div>
						</div>
						<div class="row dt-row">
							<div class="col-sm-12">
								<table id="datatables-reponsive" class="table table-striped dataTable no-footer dtr-inline" style="width: 100%;" aria-describedby="datatables-reponsive_info">
									<thead style="background-color: #7239EA;">
										<tr>
											<th class="sorting sorting_asc text-light" tabindex="0" aria-controls="datatables-reponsive" rowspan="1" colspan="1" style="width: 15px;" aria-label="No: activate to sort column descending" aria-sort="ascending">No</th>
											<th class="sorting text-light" tabindex="0" aria-controls="datatables-reponsive" rowspan="1" colspan="1" style="width: 120px;" aria-label="Nim: activate to sort column ascending">Nim</th>
											<th class="sorting text-light" tabindex="0" aria-controls="datatables-reponsive" rowspan="1" colspan="1" style="width: 175px;" aria-label="Nama Mahasiswa: activate to sort column ascending">Nama Mahasiswa</th>
											<th class="sorting text-light" tabindex="0" aria-controls="datatables-reponsive" rowspan="1" colspan="1" style="width: 175px;" aria-label="Nama Dosen Pembimbing: activate to sort column ascending">Nama Dosen Pembimbing</th>
											<th class="sorting text-light" tabindex="0" aria-controls="datatables-reponsive" rowspan="1" colspan="1" style="width: 180px;" aria-label="Judul: activate to sort column ascending">Judul</th>
											<th class="sorting text-light" tabindex="0" aria-controls="datatables-reponsive" rowspan="1" colspan="1" style="width: 63px;" aria-label="Action: activate to sort column ascending">Action</th>
										</tr>
									</thead>
									<tbody>
										<tr class="odd">
											<td class="dtr-control sorting_1" tabindex="0">1</td>
											<td>212410103030</td>
											<td>M.Nurohman</td>
											<td>Prof.Lucky</td>
											<td>Pengaruh kepuasan pe...</td>
											<td class="table-action">
												<a href="#">
													<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
														<path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"/>
														<polyline points="13 2 13 9 20 9" />
													</svg>
												</a>
												<a href="#">
													<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
														<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
														<polyline points="14 2 14 8 20 8" />
														<line x1="16" x2="8" y1="13" y2="13" />
														<line x1="16" x2="8" y1="17" y2="17" />
														<polyline points="10 9 9 9 8 9" />
													</svg>
												</a>
											</td>
										</tr>
										<tr class="even">
											<td class="dtr-control sorting_1" tabindex="0">2</td>
											<td>212410103031</td>
											<td>Fathur</td>
											<td>Prof. Ridho</td>
											<td>Pengaruh kepuasan pe...</td>
											<td class="table-action">
												<a href="#">
													<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
														<path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z" />
														<polyline points="13 2 13 9 20 9" />
													</svg>
												</a>
												<a href="#">
													<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
														<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
														<polyline points="14 2 14 8 20 8" />
														<line x1="16" x2="8" y1="13" y2="13" />
														<line x1="16" x2="8" y1="17" y2="17" />
														<polyline points="10 9 9 9 8 9" />
													</svg>
												</a>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection