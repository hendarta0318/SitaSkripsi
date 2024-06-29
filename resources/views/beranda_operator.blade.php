@extends('app_adminkit_operator')

@section('content-beranda_operator')
<div class="">
	<div class="row">
		<div class="col-9">
			<div class="container">
				<div class="col-12 col-md-12">
					<h1 class="h3 mb-3 mt-4"><b>Beranda</b></h1>
					
					<div class="row">
						<div class="col-lg-12">
							<div class="card" style="height: 40px;">
								<div class="card-header">
									<h5 class="card-title mb-0 text-success" style="font-family: Poppins, sans-serif; font-weight: 400; font-style: normal;">Halo {{ Auth::user()->name }} Selamat datang di SISMA ILKOM</h5>
								</div>
							</div>
						</div>
					</div>

					<h1 class="h3 mb-3"><b>Daftar Mahasiswa Menempuh Skripsi</b></h1>

					<div class="col-md-12">
						<div class="card">
							<div class="card-body">
								<div id="datatables-reponsive_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
									<div class="row mb-2">
										<div class="col-sm-12 col-md-12">
											<div class="dataTables_length" id="datatables-reponsive_length"></div>
										</div>
									</div>
									<div class="row dt-row">
										<div class="col-sm-12">
											<table id="datatables-reponsive" class="table table-striped dataTable no-footer dtr-inline" style="width: 100%;" aria-describedby="datatables-reponsive_info">
												<thead style="background-color: #7239EA;">
													<tr>
														<th class="sorting sorting_asc text-light" tabindex="0" aria-controls="datatables-reponsive" rowspan="1" colspan="1" style="width: 15px;" aria-label="No: activate to sort column descending" aria-sort="ascending">No</th>
														<th class="sorting text-light" tabindex="0" aria-controls="datatables-reponsive" rowspan="1" colspan="1" style="width: 100px;" aria-label="Nim: activate to sort column ascending">Nim</th>
														<th class="sorting text-light" tabindex="0" aria-controls="datatables-reponsive" rowspan="1" colspan="1" style="width: 125px;" aria-label="Nama Mahasiswa: activate to sort column ascending">Nama Mahasiswa</th>
														<th class="sorting text-light" tabindex="0" aria-controls="datatables-reponsive" rowspan="1" colspan="1" style="width: 450px;" aria-label="Judul: activate to sort column ascending">Judul</th>
														<th class="sorting text-light" tabindex="0" aria-controls="datatables-reponsive" rowspan="1" colspan="1" style="width: 130px;" aria-label="No_Wa: activate to sort column ascending">WhatsApp</th>
													</tr>
												</thead>
												<tbody>
													<?php $i =$data->firstItem()?>
													@foreach($data as $usulanpembimbingoperator)
													<tr class="odd">
														<td class="dtr-control sorting_1" tabindex="0">{{ $i }}</td>
														<td>{{ $usulanpembimbingoperator->nim }}</td>
														<td>{{ $usulanpembimbingoperator->nama }}</td>
														<td>{{ $usulanpembimbingoperator->judul }}</td>
														<td>{{ $usulanpembimbingoperator->no_wa }}</td>
													</tr>
													<?php $i++ ?>
													@endforeach
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
		</div>
		<div class="col-3">
			<div class="container">
				<div class="col-12 col-md-12 mt-3 col-xxl-3 d-flex order-2 order-xxl-1">
					<div class="card flex-fill">
						<div class="card-header">
							<h5 class="card-title mb-0 text-center fs-4">Jadwal Skripsi</h5>
						</div>
						<div class="card-body d-flex">
							<div class="align-self-center w-100">
								<div class="chart">
									<div id="datetimepicker-dashboard" class="flatpickr-input" readonly="readonly"></div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<h5 class="card-title mb-0 text-center fs-3">Agenda</h5>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-md-6">
									<a href="{{route('agenda_seminar_proposal_operator')}}" class="btn" style="background-color: #009EF7;">
										<i data-feather="file"></i>	Seminar Proposal
									</a>
								</div>
								
								<div class="col-md-6">
									<a href="{{route('agenda_sidang_skripsi_operator')}}" class="btn" style="background-color: #F1416C;">
										<i data-feather="file"></i>	Sidang Skripsi
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection