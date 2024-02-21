@extends('template_back.layout')
<title> Data Pengguna</title>
@section('isi')
 
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div>
        <h4 class="content-title mb-2">Form Data Pengguna</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{route('data-pengguna')}}">Data Pengguna</a></li>
                <li class="breadcrumb-item text-white active">Form Data Pengguna</li>
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
                    <div class="row">
                        <div class="col-md-6 mt-3">
                            <h4 class="card-title mg-b-10">Data Pengguna</h4>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex my-auto btn-list justify-content-end">
                                <a href="{{ route('data-pengguna/input')}}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Tambah</a>
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
                    @include('_component.message')
                    <div class="table-responsive mt-2">
                        <table class="table border-top-0 table-bordered table-hover table-striped text-nowrap border-bottom" id="basic-datatable">
                            <thead>
                                <tr>
                                    <th width="20px">No</th>
                                    <th style="text-align:center">Username</th>
                                    <th style="text-align:center">Email</th>
                                    <th style="text-align:center">Nama Lengkap</th>
                                    <th style="text-align:center">Alamat</th>
                                    <th style="text-align:center">Hak Akses</th>
                                    <th style="text-align:center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $dt)
                                <tr>
                                    <td width="20px">{{ $loop->iteration }}</td>
                                    <td style="text-align:center">{{$dt->username??''}}</td>
                                    <td style="text-align:center">{{$dt->email??''}}</td>
                                    <td style="text-align:center">{{$dt->namaLengkap??''}}</td>
                                    <td style="text-align:center">{{$dt->alamat??''}}</td>
                                    <td style="text-align:center">{{$dt->role??''}}</td>
                                    <td>
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('data-pengguna_destroy', $dt->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('data-pengguna_edit', $dt->id)}}" title="Edit" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
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
              "export_pdf_datapengguna?s="+s,
                  '_blank' // <- This is what makes it open in a new window.
              );
          }
    </script>
    
     
 @endsection
