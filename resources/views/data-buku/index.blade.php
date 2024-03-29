@extends('template_back.layout')
<title> Data Buku </title>
@section('isi')

<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div>
        <h4 class="content-title mb-2">Form Data Buku</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{route('data-buku')}}">Data Buku</a></li>
                <li class="breadcrumb-item text-white active">Form Data Buku</li>
            </ol>
        </nav>
    </div>
</div>
<!-- /breadcrumb -->

	<!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12" >
            <div class="card">
                <div class="pd-t-10 pd-s-10 pd-e-10 bg-white bd-b">
                    @include('_component.message')
                    <div class="row">
                        <div class="col-md-6 mt-3">
                            <h4 class="card-title mg-b-10">Data Buku</h4>
                        </div>
                        @if (auth()->user()->role=="administrator")
                        <div class="col-md-6">
                            <div class="d-flex my-auto btn-list justify-content-end">
                                <a href="{{ route('data-buku/input')}}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Tambah</a>
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
                        @endif
                    </div>
                </div>
                <div class="card-body">
                    @include('_component.message')
                    <div class="table-responsive mt-2">
                        <table class="table border-top-0 table-bordered text-nowrap border-bottom" id="basic-datatable">
                            <thead>
                                <tr>
                                    <th width="20px">No</th>
                                    <th style="text-align:center" width="50px">Judul</th>
                                    <th style="text-align:center" width="50px">Penulis</th>
                                    <th style="text-align:center" width="120px">Penerbit</th>
                                    <th style="text-align:center" width="80px">Tahun Terbit</th>
                                    @if (auth()->user()->role=="administrator")
                                    <th style="text-align:center" width="120px">Action</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($buku as $item)
                                <tr>
                                    <td style="text-align:center" width="20px">{{ $loop->iteration }}</td>
                                    <td style="text-align:center" width="50px">{{ $item->judul}}</td>
                                    <td style="text-align:center" width="50px">{{ $item->penulis}}</td>
                                    <td style="text-align:center" width="120px">{{ $item->penerbit}}</td>
                                    <td style="text-align:center" width="80px">{{ $item->tahun_terbit}}</td>
                                    @if (auth()->user()->role=="administrator")
                                    <td style="text-align:center" width="120px">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('data-buku_destroy', $item->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('data-buku_edit', $item->id)}}" title="Edit" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                            <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash" title="Edit"></i></button>
                                        </form>
                                        <form class ="d-inline"  onsubmit="return confirm('Apakah Anda Yakin Mau Menambahkan Ke Daftar Koleksi?')" action="{{ route('koleksi/store',$item->id) }}" method="post">
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-warning"><i class="fe fe-folder-plus" data-bs-toggle="tooltip" title="Koleksi Pribadi"></i></button>
                                            <a href="{{''}}" title="Ulasan Buku" class="btn btn-success btn-sm"><i class="fa fe-clipboard"></i></a>
                                        </form>
                                    </td>
                                    @endif
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->


    <script>
           $(function() {
                // formelement
                $('.select2').select2({ width: 'resolve' });
                
                // init datatable.
                $('#tbl_list').DataTable({
                    "paging": true,
                    "lengthChange": true,
                    "searching": true,
                    "ordering": false,
                    "info": true,
                    "autoWidth": false,
                    "responsive": true,
                });

            });
            
        function exportPdf() {
                  // var f1 =  $('#f1').val();
                  var s = $('.whatever').val();		
                  window.open(
                  "export_pdf_databuku?s="+s,
                      '_blank' // <- This is what makes it open in a new window.
                  );
              }
    </script>
    
@endsection

