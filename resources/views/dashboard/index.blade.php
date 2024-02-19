@extends('template_back.content')

@section('isi')

	<!-- container -->
	<div class="main-container container-fluid">

		<!-- navbar -->
		
		<div class="breadcrumb-header justify-content-between">
			<div>
				<h4 class="content-title mb-2">Selamat Datang @auth {{ auth()->user()->username }} @endauth</h4>
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a   href="javascript:void(0);">Dashboard</a></li>
						<li class="breadcrumb-item active" aria-current="page">Project</li>
					</ol>
				</nav>
			</div>
		</div>
		<!-- /breadcrumb -->

		<!-- main-content-body -->
		<div class="main-content-body">
			<div class="row row-sm">
				<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
					<div class="card overflow-hidden project-card">
						<div class="card-body">
							<div class="d-flex">
							<div class="me-4 ht-60 wd-60 my-auto primary">
							<a href="{{ route('data-buku')}}">
								<img src="{{ asset('') }}images/databuku.png" width="100px" height="100px" class="ht-40 wd-60">
							</a>
                                </div>
								<div class="project-content">
									<h6>DATA BUKU</h6>
									<ul>

										<li>
											<strong>Total</strong>
											<span>{{ $total_buku }}</span>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
					<div class="card  overflow-hidden project-card">
						<div class="card-body">
							<div class="d-flex">
							<div class="me-4 ht-60 wd-60 my-auto primary">
							<a href="{{ route('kategori')}}">
								<img src="{{ asset('') }}images/kategoribuku.png" width="100px" height="100px" class="ht-40 wd-60">
							</a>
                                </div>
								<div class="project-content">
									<h6>KATEGORI BUKU</h6>
									<ul>

										<li>
											<strong>Total</strong>
											<span>{{ $total_kategori }}</span>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
					<div class="card overflow-hidden project-card">
						<div class="card-body">
							<div class="d-flex">
							<div class="me-4 ht-60 wd-60 my-auto primary">
							<a href="{{ route('data-peminjaman')}}">
								<img src="{{ asset('') }}images/datapeminjam.png" width="100px" height="100px" class="ht-40 wd-60">
							</a>
                                </div>
								<div class="project-content">
									<h6>DATA PEMINJAM</h6>
									<ul>

										<li>
											<strong>Total</strong>
											<span>{{ $total_peminjaman }}</span>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
					<div class="card overflow-hidden project-card">
						<div class="card-body">
							<div class="d-flex">
							<div class="me-4 ht-60 wd-60 my-auto primary">
								<a href="{{ route('data-pengguna')}}">
                                    <img src="{{ asset('') }}images/datapengguna.png" width="100px" height="100px" class="ht-40 wd-60">
								</a>
                                </div>
								<div class="project-content">
									<h6>DATA PENGGUNA</h6>
									<ul>
										<li>
											<strong>Total</strong>
											<span>{{ $total_user }}</span>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- row -->
			
			<!-- /row -->

			<!-- row -->
			
			<!-- /row -->

			

			<!-- row -->
			
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
	
@endsection