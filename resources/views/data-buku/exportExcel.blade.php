<table>
    <tbody>
        <tr>
            <td colspan="9" style="font-weight:bold;text-align:center">DATA BUKU</td>
        </tr>
        <tr>
            <td colspan="9" style="font-weight:bold;text-align:center">Waktu Export : {{date('d-m-Y H:i')}}</td>
        </tr>
    </tbody>
</table>
<table>
    <thead>
    <tr>
        <th style="font-weight:bold;text-align:center;background:#f4f4f4;border:1px solid #000000;">No</th> <!-- kolom A -->
        <th style="font-weight:bold;text-align:center;background:#f4f4f4;border:1px solid #000000;">Kode</th> <!-- kolom B -->
        <th style="font-weight:bold;text-align:center;background:#f4f4f4;border:1px solid #000000;">Nama</th> <!-- kolom C -->
        <th style="font-weight:bold;text-align:center;background:#f4f4f4;border:1px solid #000000;">Kategori</th> <!-- kolom D -->
        <th style="font-weight:bold;text-align:center;background:#f4f4f4;border:1px solid #000000;">Harga Satuan</th> <!-- kolom E -->
        <th style="font-weight:bold;text-align:center;background:#f4f4f4;border:1px solid #000000;">Harga Jual</th> <!-- kolom F -->
        <th style="font-weight:bold;text-align:center;background:#f4f4f4;border:1px solid #000000;">Satuan</th> <!-- kolom G -->
        <th style="font-weight:bold;text-align:center;background:#f4f4f4;border:1px solid #000000;">Tanggal Produksi</th> <!-- kolom H -->
        <th style="font-weight:bold;text-align:center;background:#f4f4f4;border:1px solid #000000;">Tanggal Expired</th> <!-- kolom I -->
    </tr>
    </thead>
    <tbody>
    @php $no=1; @endphp
    @if(count($buku))
    @foreach($buku as $dt)
      
        <tr>
            <td style="text-align:center">{{ $loop->iteration }}</td>
            <td style="text-align:center">{{ $item->judul}}</td>
            <td style="text-align:center">{{ $item->penulis}}</td>
            <td style="text-align:center">{{ $item->penerbit}}</td>
            <td style="text-align:center">{{ $item->tahun_terbit}}</td>
            <td>
        </tr>
    @endforeach
    @endif
    </tbody>
</table>