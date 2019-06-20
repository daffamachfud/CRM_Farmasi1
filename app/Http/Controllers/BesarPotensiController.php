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

   
    public function store(Request $request)
    {
		// insert data ke table besar_potensi

		
	    DB::table('besar_potensi')->insert([
		    'nama' => $request->nama,
		    'banyak_produk' => $request->bayak_produk,
            'h_obat_sejenis' => $request->h_obat_sejenis,
		    'h_obat_sejenis_resep' => $request->h_obat_sejenis_resep,
		    'jum_hari_praktek' => $request->jum_hari_praktek
            
	    ]);
	    // alihkan halaman ke halaman pegawai
	    return redirect('/datadokter');
    }
}
