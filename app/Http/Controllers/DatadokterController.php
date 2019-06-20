<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DatadokterController extends Controller
{
    public function home(){
        // mengambil data dari table dokter
    	$dokter = DB::table('dokter')->get();
 
    	// mengirim data dokter ke view index
    	return view('home',['dokter' => $dokter]);
		
	}
 
	public function input(){
		return view('input');
	}
 
    public function store(Request $request)
    {
	    // insert data ke table pegawai
	    DB::table('dokter')->insert([
		    'nama' => $request->nama,
		    'spesialis' => $request->spesialis,
		    'kontak' => $request->kontak
	    ]);
	    // alihkan halaman ke halaman pegawai
	    return redirect('/datadokter');
    }

    public function edit($id_dokter)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $dokter = DB::table('dokter')->where('id_dokter',$id_dokter)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('edit',['dokter' => $dokter]);
    
    }

    public function update(Request $request)
    {
        // update data dokter
        DB::table('dokter')->where('id_dokter',$request->id_dokter)->update([
            'nama' => $request->nama,
            'spesialis' => $request->spesialis,
            'kontak' => $request->kontak,
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/datadokter');
    }

    // method untuk hapus data pegawai
    public function hapus($id_dokter)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('dokter')->where('id_dokter',$id_dokter)->delete();
            
        // alihkan halaman ke halaman pegawai
        return redirect('/datadokter');
    }

}
