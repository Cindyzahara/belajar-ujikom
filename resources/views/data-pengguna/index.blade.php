@extends('template_back.layout')

@section('isi')

 <!-- breadcrumb -->
 <div class="breadcrumb-header justify-content-between">
    <div>
        <h4 class="content-title mb-2">Form Data peminjaman</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{route('data-peminjaman')}}">Data peminjaman</a></li>
                <li class="breadcrumb-item text-white active">Form Data Peminjaman</li>
            </ol>
        </nav>
    </div>
</div>
<!-- /breadcrumb -->
<div class="row row-sm">
    <div class="col-xl-12 col-lg-12 col-sm-12 col-md-12">
        <div class="card">
            

            <div class="pd-t-10 pd-s-10 pd-e-10 bg-white bd-b">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="card-title mg-b-10">Data peminjaman</h4>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex my-auto btn-list justify-content-end">
                            <a href="{{ route('data-peminjaman/input')}}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Tambah</a>
                             <button onclick="formImport()" class="btn btn-sm btn-secondary"><i class="fa fa-upload me-2"></i> Import</button>
                            <div class="dropdown">
                                <button type="button" class="btn btn-sm btn-success dropdown-toggle" data-bs-toggle="dropdown">
                                    <i class="fa fa-download me-2"></i>Export
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0)" onclick="exportExcel()">Excel</a>
                                    <a class="dropdown-item" href="javascript:void(0)" onclick="exportPdf()">PDF</a>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <!-- message info -->
                @include('_component.message')
                <div class="row">
                    <div class="col-md-3">
                        <label class="form-label mt-2 mb-0">Kategori Buku</label> 
                        <select id="f1" class="form-control select2" onchange="reload_table()">
                            @php $db = DB::table('buku')->select('*')->orderBy('judul','ASC')->get(); @endphp
                            <option value="">=== semua ===</option>
                            @foreach($db as $key => $val)
                            <option value="{{$val->id}}" @if(request()->get('f1')==$val->id) selected @endif>{{$val->judul}}</option>
                            @endforeach
                        </select>
                    </div>
                <hr>
                <div class="table-responsive">
                    <table id="tbl_list" class="table table-sm table-striped table-bordered tx-14" width="100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Buku</th>
                                <th>Tanggal Peminjaman</th>
                                <th>Tanggal Pengembalian</th>
                                <th>Status Peminjaman</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @php $no=1; @endphp --}}
                            @foreach ($peminjaman as $item)
                            {{-- @php 
                             $peminjaman = DB::table('users')->select('*')->orderBy('username','ASC')->get(); 
                            @endphp --}}
                            {{-- @php 
                             $buku = DB::table('buku')->select('*')->orderBy('judul','ASC')->get(); 
                            @endphp --}}
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{$item->user_id}}</td>
                                <td>{{$item->buku_id}}</td>
                                <td>{{ $item->TaggalPeminjaman}}</td>
                                <td>{{ $item->TaggalPengembalian}}</td>
                                <td>{{ $item->StatusPeminjaman}}</td>
                                <td>
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="" title="Edit" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                        <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

    
@endsection