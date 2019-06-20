<!-- Menghubungkan dengan view template master -->
@extends('master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', '')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

<div class="container">
		<div class="card">
			<div class="card-body">

<h3>Edit Data Dokter</h3>

	<a href="/pegawai"> Kembali</a>
	
	<br/>
	<br/>

	@foreach($dokter as $d)
	<form action="/datadokter/update" method="post">
	<div class="form-group row">
		{{ csrf_field() }}
		<input type="hidden" name="id_dokter" value="{{ $d->id_dokter }}"> 
		<label class="col-sm-2 col-form-label" >Nama</label>
			<div class="col-sm-10">
		 		<input type="text" required="required" name="nama" value="{{ $d->nama }}"> 
		 	</div>
	</div>	

	<div class="form-group row">
		<label class="col-sm-2 col-form-label" >Spesialis</label>
		<div class="col-sm-10">
		 	<input type="text" required="required" name="spesialis" value="{{ $d->spesialis }}"> 
		 </div>
	</div>

	<div class="form-group row">
		<label class="col-sm-2 col-form-label" >Kontak</label>
		<div class="col-sm-10">
			<input type="number" required="required" name="kontak" value="{{ $d->kontak }}"> 
		</div>
	</div>

	<div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" value="Simpan Data" class="btn btn-primary"> Simpan</button>
            </div>
        </div>
	
		
	</form>
	@endforeach

</div>
</div>
</div>
@endsection