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
<h3>Pilih Dokter</h3>
	
<table class="table table-bordered">
	<thead>
		<tr>
			<th>Nama</th>
			<th>Spesialis</th>
			<th>Opsi</th>
		</tr>
		</thead>
	
		@foreach($dokter as $d)
		<tbody>
		<tr>
			<td>{{ $d->nama }}</td>
			<td>{{ $d->spesialis }}</td>
			<td>
            <a class="btn btn-primary btn-sm" href="/besarpotensi/input_potensi/{{ $d->id_dokter }}">Hitung</a> 
          </td>
		</tr>
		@endforeach
		</tbody>
	</table>


@endsection