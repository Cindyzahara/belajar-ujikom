<!DOCTYPE html>
<html>
<head>
	<title>Laporan Koleksi</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
		table tr th{
			font-weight:bold;
			text-align:center;
			background:#f4f4f4;
		}
	</style>
	<center>
		<h4>Koleksi</h4>
		<p>Waktu Export : {{date('d-m-Y H:i')}}</p>
	</center>
 
	<table class='table table-bordered'>
		<thead>
		<tr>
			<th width="20px">No</th> 
			<th width="20px">Nama</th>
			<th>Buku</th>
		</tr>
		</thead>
		<tbody>
		@php $no=1; @endphp
		@if(count($data))
		@foreach($data as $dt)
			<tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{$item->user->username}}</td>
                <td>{{$item->buku->judul}}</td>
			</tr>
		@endforeach
		@endif
		</tbody>
	</table>
 
</body>
</html>