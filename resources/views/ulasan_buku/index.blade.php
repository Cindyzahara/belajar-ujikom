@extends('template_back.content')
@section('title', 'Data Ulasan Buku')
@section('content')


<!-- container opened -->
<div class="container">

    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div>
            <h4 class="content-title mb-2">Data Ulasan Buku</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                    <li class="breadcrumb-item text-white active">Data Ulasan Buku</li>
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
                            <p>Data Ulasan Buku</p>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex my-auto btn-list justify-content-end">
                                <a href="" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Tambah</a>
                                <!-- <button onclick="formImport()" class="btn btn-sm btn-secondary"><i class="fa fa-upload me-2"></i> Import</button>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-sm btn-success dropdown-toggle" data-bs-toggle="dropdown">
                                        <i class="fa fa-download me-2"></i>Export
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0)" onclick="exportExcel()">Excel</a>
                                        <a class="dropdown-item" href="javascript:void(0)" onclick="exportPdf()">PDF</a>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <!-- message info -->
                    @include('_component.message')
                    <div class="row">
                        <div class="col-md-3">
                            <label class="form-label mt-2 mb-0">Hak Akses</label> 
                            <select id="f1" class="form-control select2" onchange="reload_table()">
                                <option value="">=== semua ===</option>
                                <!-- <option value="1" @if(request()->get('f1')==1) selected @endif>administrator</option>
                                <option value="2" @if(request()->get('f1')==2) selected @endif>operator</option> -->
                            </select>
                        </div>
                    </div>
                    <hr>
                    <div class="table-responsive">
                        <table id="tbl_list" class="table table-sm table-striped table-bordered tx-14" width="100%">
                            <thead>
                                <tr>
                                    <th width="50px">ID</th>
                                    <th width="50px">User</th>
                                    <th width="180px">Buku</th>
                                    <th>    Ulasan  </th>
                                    <th>Rating</th>
                                </tr>
                            </thead>
                            <thead>
                                <tr>
                                    <th width="50px">14274</th>
                                    <th width="50px">Hadi</th>
                                    <th width="180px">Psychology of Money</th>
                                    <th>madep</th>
                                    <th>9,5/10</th>
                                </tr>
                            </thead>
                            <tbody>
                          
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>


</div>
<!-- /container -->


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
            
            function reload_table(){
                var f1 =  $('#f1').val();	
                window.location.href="data_pengguna?f1="+f1;
            }

        </script>
    



@endsection