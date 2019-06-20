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

<h3>Input Besar Potensi </h3>
 
 <a href="/besarpotensi/home"> Kembali</a>
 
 <br/>
 <br/>

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

<h3>Hitung Besar Potensi</h3>

	<a href="/besarpotensi/home"> Kembali</a>
	
	<br/>
	<br/>

	@foreach($dokter as $d)
	<form action="/besarpotensi/store" method="post">
	<div class="form-group row">
		{{ csrf_field() }}
		<input type="hidden" name="id_dokter" value="{{ $d->id_dokter }}"> 
		<label class="col-sm-2 col-form-label" >Nama</label>
			<div class="col-sm-10">
		 		<input type="text" required="required" name="nama" value="{{ $d->nama }}"> 
		 	</div>
	</div>	
    @endforeach

	<div class="form-group row">
    <label class="col-sm-2 col-form-label" >Spesialis</label>
         <div class="col-sm-10">
             <input class="form-control" type="text" name="spesialis" placeholder="Spesialis" required="required">
        </div>
 </div>
	
		
	</form>
	

</div>
</div>
</div>
@endsection
      </div>
      </div>
      </div>


@endsection