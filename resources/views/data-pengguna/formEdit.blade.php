@extends('template_back.layout')
<title> Form Edit Pengguna</title>
@section('isi')

<!-- container opened -->
<div class="container">

    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div>
            <h4 class="content-title mb-2">Form Edit Pengguna  </h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{route('data-pengguna')}}">Data Pengguna</a></li>
                    <li class="breadcrumb-item text-white active">Form Edit Pengguna</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- /breadcrumb -->
    <div class="row row-sm">
        <div class="col-xl-12 col-lg-12 col-sm-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="main-content-label mg-b-5">
                        Form Edit Buku
                    </div>
                    <p class="mg-b-20">Silahkan isi form di bawah ini dengan lengkap.</p>
                    <!-- message info -->
                    @include('_component.message')
                    <div class="pd-10 pd-sm-20 bg-gray-100">
                        <form action="{{ route('data-pengguna_update', $user->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-12">
                                      
                                        <div class="row row-xs align-items-center mg-b-20">
                                            <div class="col-md-3">
                                                <label class="form-label mg-b-0">Username </label>
                                            </div>
                                            <div class="col-md-9 mg-t-5 mg-md-t-0">
                                                <input class="form-control" placeholder="" type="text" name="username" value="{{ $user->username}}">
                                            </div>
                                        </div>
                                        <div class="row row-xs align-items-center mg-b-20">
                                            <div class="col-md-3">
                                                <label class="form-label mg-b-0">Email </label>
                                            </div>
                                            <div class="col-md-9 mg-t-5 mg-md-t-0">
                                                <input class="form-control" placeholder="" type="text" name="email" value="{{ $user->email}}">
                                            </div>
                                        </div>
                                        <div class="row row-xs align-items-center mg-b-20">
                                            <div class="col-md-3">
                                                <label class="form-label mg-b-0">Password</label>
                                            </div>
                                            <div class="col-md-9 mg-t-5 mg-md-t-0">
                                                <input class="form-control" placeholder="" type="text" name="password" value="{{ $user->password}}">
                                            </div>
                                        </div>
                                        <div class="row row-xs align-items-center mg-b-20">
                                            <div class="col-md-3">
                                                <label class="form-label mg-b-0">Nama Lengkap</label>
                                            </div>
                                            <div class="col-md-9 mg-t-5 mg-md-t-0">
                                                <input class="form-control" placeholder="" type="text" name="namaLengkap" value="{{ $user->namaLengkap}}">
                                            </div>
                                        </div>
                                        <div class="row row-xs align-items-center mg-b-20">
                                            <div class="col-md-3">
                                                <label class="form-label mg-b-0">Alamat</label>
                                            </div>
                                            <div class="col-md-9 mg-t-5 mg-md-t-0">
                                                <input class="form-control" placeholder="" type="text" name="alamat" value="{{ $user->alamat}}">
                                            </div>
                                        </div>
                                        <div class="row row-xs align-items-center mg-b-20">
                                            <div class="col-md-3">
                                                <label class="form-label mg-b-0">Hak Akses </label>
                                            </div>
                                            <div class="col-md-9 mg-t-5 mg-md-t-0">
                                                <select class="form-control" name="role" value="{{ $user->role}}">
                                                    <option value="">Pilih Hak Akses </option>
                                                    <option value="administrator"> Administrator</option>
                                                    <option value="operator">Petugas</option>
                                                    <option value="operator">Peminjam</option>
                                                </select>
                                            </div>
                                        </div>
    
                                     
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="float-right btn btn-primary pd-x-30 mg-e-5 mg-t-5"><i id="msg_formEdit"></i>&nbsp;&nbsp;<i class='fa fa-save'></i> Simpan</button>
                        <a href="{{route('data-pengguna')}}" class="btn btn-secondary pd-x-30 mg-t-5"><i class='fa fa-chevron-left'></i> Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
<!-- /container -->
    
@endsection