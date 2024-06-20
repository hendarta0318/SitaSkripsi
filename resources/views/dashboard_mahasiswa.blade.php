@extends('app_adminkit_mahasiswa')

@section('content-dashboard_mahasiswa')
<div class="">
	<div class="row">
		<div class="col-9">
			<div class="container">
				<div class="col-12 col-md-12">
					<h1 class="h3 mb-3 mt-4"><b>Dashboard</b></h1>
					<div class="row">
						<div class="col-lg-12">
							<div class="card" style="height: 40px;">
								<div class="card-header">
									<h5 class="card-title mb-0">Halo {{ Auth::user()->name }} Selamat datang di SITA ILKOM</h5>
								</div>
							</div>
						</div>
					</div>

					<!-- <div class="row">
						<div class="col-md-3">
							<div class="card">
								<div class="card-header bg-primary">
									<h5 class="card-title mb-0 text-dark">Total Skripsi</h5>
									<h2 class="card-title-mb-0" style="font-size: 40px; display: inline-block;"><b>0</b></h2>
									<h5 class="card-title-mb-0" style="font-size: 18px; display: inline-block; margin-left: 8px;">Mahasiswa</h5>
								</div>
							</div>
						</div>

						<div class="col-md-3">
							<div class="card">
								<div class="card-header bg-success">
									<h5 class="card-title mb-0 text-dark">Bimbingan Skripsi</h5>
									<h2 class="card-title-mb-0" style="font-size: 40px; display: inline-block;"><b>0</b></h2>
									<h5 class="card-title-mb-0" style="font-size: 18px; display: inline-block; margin-left: 8px;">Mahasiswa</h5>
								</div>
							</div>
						</div>

						<div class="col-md-3">
							<div class="card ">
								<div class="card-header bg-warning">
									<h5 class="card-title mb-0 text-dark">Sidang Proposal</h5>
									<h2 class="card-title-mb-0" style="font-size: 40px; display: inline-block;"><b>0</b></h2>
									<h5 class="card-title-mb-0" style="font-size: 18px; display: inline-block; margin-left: 8px;">Mahasiswa</h5>
								</div>
							</div>
						</div>

						<div class="col-md-3">
							<div class="card ">
								<div class="card-header bg-danger">
									<h5 class="card-title mb-0 text-dark">Sidang Skripsi</h5>
									<h2 class="card-title-mb-0" style="font-size: 40px; display: inline-block;"><b>0</b></h2>
									<h5 class="card-title-mb-0" style="font-size: 18px; display: inline-block; margin-left: 8px;">Mahasiswa</h5>
								</div>
							</div>
						</div>
					</div> -->

					<h1 class="h3 mb-3"><b>Daftar Mahasiswa Menempuh Skripsi</b></h1>

					<div class="col-md-12">
						<div class="card">
							<div class="card-body">
								<div id="datatables-reponsive_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
									<div class="row mb-2">
										<div class="col-sm-12 col-md-6">
											<div class="dataTables_length" id="datatables-reponsive_length">
												<label class="d-flex align-items-center">
													Show
													<select name="datatables-reponsive_length" aria-controls="datatables-reponsive" class="form-select form-select-sm mx-2" style="margin-left: 5px; margin-right: 5px; width: 75px;">
														<option value="10">10</option>
														<option value="25">25</option>
														<option value="50">50</option>
														<option value="100">100</option>
													</select>
													entries
												</label>
											</div>
										</div>
										<div class="col-sm-12 col-md-6">
											<div id="datatables-reponsive_filter" class="dataTables_filter">
												<input type="search" class="form-control form-control-sm" placeholder="Cari" aria-controls="datatables-reponsive" style="margin-left: 150px; width: 75%;" />
											</div>
										</div>
									</div>
									<div class="row dt-row">
										<div class="col-sm-12">
											<table id="datatables-reponsive" class="table table-striped dataTable no-footer dtr-inline" style="width: 100%;" aria-describedby="datatables-reponsive_info">
												<thead style="background-color: #7239EA;">
													<tr>
														<th
															class="sorting sorting_asc text-light"
															tabindex="0"
															aria-controls="datatables-reponsive"
															rowspan="1"
															colspan="1"
															style="width: 15px;"
															aria-label="No: activate to sort column descending"
															aria-sort="ascending"
														>
															No
														</th>
														<th class="sorting text-light" tabindex="0" aria-controls="datatables-reponsive" rowspan="1" colspan="1" style="width: 145px;" aria-label="Nim: activate to sort column ascending">Nim</th>
														<th class="sorting text-light" tabindex="0" aria-controls="datatables-reponsive" rowspan="1" colspan="1" style="width: 200px;" aria-label="Nama Mahasiswa: activate to sort column ascending">Nama Mahasiswa</th>
														<th class="sorting text-light" tabindex="0" aria-controls="datatables-reponsive" rowspan="1" colspan="1" style="width: 130px;" aria-label="Judul: activate to sort column ascending">Judul</th>
														<!-- <th class="sorting text-light" tabindex="0" aria-controls="datatables-reponsive" rowspan="1" colspan="1" style="width: 63px;" aria-label="Salary: activate to sort column ascending">Salary</th> -->
													</tr>
												</thead>
												<tbody>
													<tr class="odd">
														<td class="dtr-control sorting_1" tabindex="0">1</td>
														<td>212410103030</td>
														<td>M.Nurohman</td>
														<td>Pengaruh kepuasan pe...</td>
													</tr>
													<tr class="even">
														<td class="dtr-control sorting_1" tabindex="0">2</td>
														<td>212410103031</td>
														<td>Fathur</td>
														<td>Pengaruh kepuasan pe...</td>
														<!-- <td class="" style="">$1,200,000</td> -->
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12 col-md-6">
											<div class="dataTables_info" id="datatables-reponsive_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
										</div>
										<div class="col-sm-12 col-md-6">
											<div class="dataTables_paginate paging_simple_numbers" id="datatables-reponsive_paginate">
												<ul class="pagination">
													<li class="paginate_button page-item previous disabled" id="datatables-reponsive_previous">
														<a aria-controls="datatables-reponsive" aria-disabled="true" aria-role="link" data-dt-idx="previous" tabindex="0" class="page-link">Previous</a>
													</li>
													<li class="paginate_button page-item active">
														<a href="#" aria-controls="datatables-reponsive" aria-role="link" aria-current="page" data-dt-idx="0" tabindex="0" class="page-link">1</a>
													</li>
													<li class="paginate_button page-item">
														<a href="#" aria-controls="datatables-reponsive" aria-role="link" data-dt-idx="1" tabindex="0" class="page-link">2</a>
													</li>
													<li class="paginate_button page-item">
														<a href="#" aria-controls="datatables-reponsive" aria-role="link" data-dt-idx="2" tabindex="0" class="page-link">3</a>
													</li>
													<li class="paginate_button page-item">
														<a href="#" aria-controls="datatables-reponsive" aria-role="link" data-dt-idx="3" tabindex="0" class="page-link">4</a>
													</li>
													<li class="paginate_button page-item">
														<a href="#" aria-controls="datatables-reponsive" aria-role="link" data-dt-idx="4" tabindex="0" class="page-link">5</a>
													</li>
													<li class="paginate_button page-item">
														<a href="#" aria-controls="datatables-reponsive" aria-role="link" data-dt-idx="5" tabindex="0" class="page-link">6</a>
													</li>
													<li class="paginate_button page-item next" id="datatables-reponsive_next">
														<a href="#" aria-controls="datatables-reponsive" aria-role="link" data-dt-idx="next" tabindex="0" class="page-link">Next</a>
													</li>
												</ul>
											</div>
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
									<div class="flatpickr-calendar animate inline" tabindex="-1">
										<div class="flatpickr-months">
											<span class="flatpickr-prev-month"><span class="fas fa-chevron-left" title="Previous month"></span></span>
											<div class="flatpickr-month">
												<div class="flatpickr-current-month">
													<select class="flatpickr-monthDropdown-months" aria-label="Month" tabindex="-1">
														<option class="flatpickr-monthDropdown-month" value="0" tabindex="-1">January</option>
														<option class="flatpickr-monthDropdown-month" value="1" tabindex="-1">February</option>
														<option class="flatpickr-monthDropdown-month" value="2" tabindex="-1">March</option>
														<option class="flatpickr-monthDropdown-month" value="3" tabindex="-1">April</option>
														<option class="flatpickr-monthDropdown-month" value="4" tabindex="-1">May</option>
														<option class="flatpickr-monthDropdown-month" value="5" tabindex="-1">June</option>
														<option class="flatpickr-monthDropdown-month" value="6" tabindex="-1">July</option>
														<option class="flatpickr-monthDropdown-month" value="7" tabindex="-1">August</option>
														<option class="flatpickr-monthDropdown-month" value="8" tabindex="-1">September</option>
														<option class="flatpickr-monthDropdown-month" value="9" tabindex="-1">October</option>
														<option class="flatpickr-monthDropdown-month" value="10" tabindex="-1">November</option>
														<option class="flatpickr-monthDropdown-month" value="11" tabindex="-1">December</option>
													</select>
													<div class="numInputWrapper"><input class="numInput cur-year" type="number" tabindex="-1" aria-label="Year" /><span class="arrowUp"></span><span class="arrowDown"></span></div>
												</div>
											</div>
											<span class="flatpickr-next-month"><span class="fas fa-chevron-right" title="Next month"></span></span>
										</div>
										<div class="flatpickr-innerContainer">
											<div class="flatpickr-rContainer">
												<div class="flatpickr-weekdays">
													<div class="flatpickr-weekdaycontainer">
														<span class="flatpickr-weekday"> Sun</span><span class="flatpickr-weekday">Mon</span><span class="flatpickr-weekday">Tue</span><span class="flatpickr-weekday">Wed</span>
														<span class="flatpickr-weekday">Thu</span><span class="flatpickr-weekday">Fri</span><span class="flatpickr-weekday">Sat </span>
													</div>
												</div>
												<div class="flatpickr-days" tabindex="-1">
													<div class="dayContainer">
														<span class="flatpickr-day prevMonthDay" aria-label="April 28, 2024" tabindex="-1">28</span>
														<span class="flatpickr-day prevMonthDay" aria-label="April 29, 2024" tabindex="-1">29</span>
														<span class="flatpickr-day prevMonthDay" aria-label="April 30, 2024" tabindex="-1">30</span><span class="flatpickr-day" aria-label="May 1, 2024" tabindex="-1">1</span>
														<span class="flatpickr-day" aria-label="May 2, 2024" tabindex="-1">2</span><span class="flatpickr-day" aria-label="May 3, 2024" tabindex="-1">3</span>
														<span class="flatpickr-day" aria-label="May 4, 2024" tabindex="-1">4</span><span class="flatpickr-day" aria-label="May 5, 2024" tabindex="-1">5</span>
														<span class="flatpickr-day" aria-label="May 6, 2024" tabindex="-1">6</span><span class="flatpickr-day" aria-label="May 7, 2024" tabindex="-1">7</span>
														<span class="flatpickr-day" aria-label="May 8, 2024" tabindex="-1">8</span><span class="flatpickr-day" aria-label="May 9, 2024" tabindex="-1">9</span>
														<span class="flatpickr-day" aria-label="May 10, 2024" tabindex="-1">10</span><span class="flatpickr-day" aria-label="May 11, 2024" tabindex="-1">11</span>
														<span class="flatpickr-day" aria-label="May 12, 2024" tabindex="-1">12</span><span class="flatpickr-day" aria-label="May 13, 2024" tabindex="-1">13</span>
														<span class="flatpickr-day" aria-label="May 14, 2024" tabindex="-1">14</span><span class="flatpickr-day" aria-label="May 15, 2024" tabindex="-1">15</span>
														<span class="flatpickr-day" aria-label="May 16, 2024" tabindex="-1">16</span><span class="flatpickr-day" aria-label="May 17, 2024" tabindex="-1">17</span>
														<span class="flatpickr-day selected" aria-label="May 18, 2024" tabindex="-1">18</span><span class="flatpickr-day" aria-label="May 19, 2024" tabindex="-1">19</span>
														<span class="flatpickr-day" aria-label="May 20, 2024" tabindex="-1">20</span><span class="flatpickr-day" aria-label="May 21, 2024" tabindex="-1">21</span>
														<span class="flatpickr-day" aria-label="May 22, 2024" tabindex="-1">22</span><span class="flatpickr-day today" aria-label="May 23, 2024" aria-current="date" tabindex="-1">23</span>
														<span class="flatpickr-day" aria-label="May 24, 2024" tabindex="-1">24</span><span class="flatpickr-day" aria-label="May 25, 2024" tabindex="-1">25</span>
														<span class="flatpickr-day" aria-label="May 26, 2024" tabindex="-1">26</span><span class="flatpickr-day" aria-label="May 27, 2024" tabindex="-1">27</span>
														<span class="flatpickr-day" aria-label="May 28, 2024" tabindex="-1">28</span><span class="flatpickr-day" aria-label="May 29, 2024" tabindex="-1">29</span>
														<span class="flatpickr-day" aria-label="May 30, 2024" tabindex="-1">30</span><span class="flatpickr-day" aria-label="May 31, 2024" tabindex="-1">31</span>
														<span class="flatpickr-day nextMonthDay" aria-label="June 1, 2024" tabindex="-1">1</span><span class="flatpickr-day nextMonthDay" aria-label="June 2, 2024" tabindex="-1">2</span>
														<span class="flatpickr-day nextMonthDay" aria-label="June 3, 2024" tabindex="-1">3</span><span class="flatpickr-day nextMonthDay" aria-label="June 4, 2024" tabindex="-1">4</span>
														<span class="flatpickr-day nextMonthDay" aria-label="June 5, 2024" tabindex="-1">5</span><span class="flatpickr-day nextMonthDay" aria-label="June 6, 2024" tabindex="-1">6</span>
														<span class="flatpickr-day nextMonthDay" aria-label="June 7, 2024" tabindex="-1">7</span><span class="flatpickr-day nextMonthDay" aria-label="June 8, 2024" tabindex="-1">8</span>
													</div>
												</div>
											</div>
										</div>
									</div>
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
									<a href="index.html" class="btn" style="background-color: #009EF7;">
										<i data-feather="file"></i>	Seminar Proposal
									</a>
								</div>
								
								<div class="col-md-6">
									<a href="index.html" class="btn" style="background-color: #F1416C;">
										<i data-feather="file"></i>	Sidang Skripsi
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- container -->
		</div>
	</div>
</div>


@endsection