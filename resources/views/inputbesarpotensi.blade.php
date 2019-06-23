

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
	<form action="/besarpotensi/hitung" method="POST">
	<div class="form-group row">
		{{ csrf_field() }}
		<input type="hidden" name="id_dokter" value="{{ $d->id_dokter }}"> 
		<label class="col-sm-2 col-form-label" >Nama</label>
			<div class="col-sm-10">
		 		<span>{{$d->nama}}</span> 
		 	</div>
	</div>	
    @endforeach

	<div class="form-group row">
    <label class="col-sm-2 col-form-label" >Jumlah Hari Prakter</label>
         <div class="col-sm-10">
             <input class="form-control" type="number" name="jum_hari_prak" placeholder="Jumlah Hari Praktek" required="required">
        </div>
    </div>

    <div class="form-group row">
    <label class="col-sm-2 col-form-label" >Jumlah Minggu</label>
         <div class="col-sm-10">
             <input class="form-control" type="number" name="harga_obat_sejenis" placeholder="Dalam 1 Bulan Tersebut" required="required">
        </div>
    </div>

    <div class="form-group row">
    <label class="col-sm-2 col-form-label" >Rata-Rata Pasien</label>
         <div class="col-sm-10">
             <input class="form-control" type="number" name="harga_obat_sejenis_resep" placeholder="/Hari" required="required">
        </div>
    </div>

    <div class="form-group row">
    <label class="col-sm-2 col-form-label" >Rata-rata Obat Sejenis</label>
         <div class="col-sm-10">
             <input class="form-control" type="number" name="jumlah_hari_praktek" placeholder="Yang diresepkan ke Pasien" required="required">
        </div>
    </div>

    <div class="form-group row">
    <label class="col-sm-2 col-form-label" >Harga Obat </label>
         <div class="col-sm-10">
             <input class="form-control" type="number" name="harga_obat" placeholder="Yang akan ditawarkan medrep" required="required">
        </div>
    </div>

    <input type="submit" value="Jumlahkan">
		
	</form>
	

</div>
</div>
</div>
@endsection



