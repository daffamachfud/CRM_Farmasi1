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

<h3>Input Data Dokter</h3>
 
 <a href="/datadokter"> Kembali</a>
 
 <br/>
 <br/>

 <form action="/datadokter/store" method="post">
 <div class="form-group row">
     {{ csrf_field() }}
    <label class="col-sm-2 col-form-label" >Nama</label>
         <div class="col-sm-10">
             <input class="form-control" type="text" name="nama" placeholder="Nama" required="required">
        </div>
 </div>
    
 <div class="form-group row">
    <label class="col-sm-2 col-form-label" >Spesialis</label>
         <div class="col-sm-10">
             <input class="form-control" type="text" name="spesialis" placeholder="Spesialis" required="required">
        </div>
 </div>

 <div class="form-group row">
        <label class="col-sm-2 col-form-label" >Kontak</label>
         <div class="col-sm-10">
             <input class="form-control" type="text" name="kontak" placeholder="Kontak" required="required">
        </div>
</div>

        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" value="Simpan Data" class="btn btn-primary"> Submit</button>
            </div>
        </div>

     
      </form>

      </div>
      </div>
      </div>


@endsection