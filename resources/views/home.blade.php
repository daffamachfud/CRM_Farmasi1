<!-- Menghubungkan dengan view template master -->
@extends('master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->



<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

<div class="container">
		<div class="card">
			<div class="card-body">
<h3>Data Dokter</h3>
 
	<a href="/datadokter/input"> + Tambah Dokter Baru</a>
	
	<br/>
	<br/>
 
	<table class="table table-bordered">
	<thead>
		<tr>
			<th>Nama</th>
			<th>Spesialis</th>
			<th>Kontak</th>
			<th>Opsi</th>
		</tr>
		</thead>
	
		@foreach($dokter as $d)
		<tbody>
		<tr>
			<td>{{ $d->nama }}</td>
			<td>{{ $d->spesialis }}</td>
			<td>{{ $d->kontak }}</td>
			<td>
            <a class="btn btn-warning btn-sm" href="/datadokter/edit/{{ $d->id_dokter }}">Edit</a> |
            <a class="btn btn-danger btn-sm" href="/datadokter/hapus/{{ $d->id_dokter }}">Hapus</a>
			</td>
		</tr>
		@endforeach
		</tbody>
	</table>

	<br/>
				
				</div>
		</div>
	</div>

@endsection