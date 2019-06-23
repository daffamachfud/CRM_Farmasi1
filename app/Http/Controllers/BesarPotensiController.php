<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BesarPotensiController extends Controller
{

    public function home(){

		 // mengambil data dari table dokter
		 $dokter = DB::table('dokter')->get();
 

        return view('besarpotensi',['dokter' => $dokter]);
	}
	
	public function input_potensi($id_dokter){

		// mengambil data pegawai berdasarkan id yang dipilih
		$dokter = DB::table('dokter')->where('id_dokter',$id_dokter)->get();
		return view('inputbesarpotensi',['dokter'=> $dokter]);
	}

	public function hitung(Request $request){


		$dokter = DB::table('dokter')->get();
 
		// Ambil variabel dari form
	$a = $request->jum_hari_prak;
	$b = $request->harga_obat_sejenis;
	$c = $request->harga_obat_sejenis_resep;
	$d = $request->jumlah_hari_praktek;
	$e = $request->harga_obat;
	
	$potensi_peresepan = $a * $b * $c * $d * $e;
	
		return view('hasilhitung',compact('potensi_peresepan','dokter'));

	}
   
   
}
