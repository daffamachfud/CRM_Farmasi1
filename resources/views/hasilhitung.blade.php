<!-- Menghubungkan dengan view template master -->
@extends('master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->



<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
 
@foreach($dokter as $d)
    TOTAL PERESEPAN {{$d->nama}}
	
		<span>{{$potensi_peresepan}}</span>

        @endforeach
@endsection