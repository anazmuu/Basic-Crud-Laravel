<?php

//php artisan make:controller SiswaController
//untuk menambah controller 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //untuk menambah data base

class SiswaController extends Controller
{
    public function datasiswa()
    {
    	// mengambil data dari table siswa
    	$siswa = DB::table('siswa')->get();
 
    	// mengirim data siswa ke view index
    	return view('datasiswa',['siswa' => $siswa]);
 
    }

    public function tambahsiswa(){
        return view('tambahsiswa');
    }

    public function proses_siswa(Request $request){
        DB::table('siswa')->insert([
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'alamat' => $request->alamat
        ]);
        return redirect('/datasiswa');
    }

    public function editsiswa($id){
        $siswa = DB::table('siswa')->where('id',$id)->get();
        return view('editsiswa',['siswa' => $siswa]);
    }

    // update data siswa
    public function updatesiswa(Request $request)
    {  
        // update data siswa
        DB::table('siswa')->where('id',$request->id)->update([
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'alamat' => $request->alamat
        ]);
        // alihkan halaman ke halaman siswa
        return redirect('/datasiswa');
    }

    public function hapus_siswa($id){
        DB::table('siswa')->where('id',$id)->delete();

        return redirect('/datasiswa');
    }

}
