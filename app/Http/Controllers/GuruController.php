<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 

class GuruController extends Controller
{
    public function dataguru(){

        $guru = DB::table('guru')->get();

        return view('dataguru', ['guru' => $guru]);
    }

    public function tambahguru(){
        return view('tambahguru');
    }

    public function proses_guru(Request $request){
        DB::table('guru')->insert([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'mapel' => $request->mapel
        ]);
        return redirect('/dataguru');
    }

    public function edit_guru($id){
        $guru = DB::table('guru')->where('id',$id)->get();
        return view('editguru',['guru' => $guru]);
    }

    // update data siswa
    public function updateguru(Request $request)
    {  
    // update data siswa
    DB::table('guru')->where('id',$request->id)->update([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'mapel' => $request->mapel
    ]);
    // alihkan halaman ke halaman siswa
    return redirect('/dataguru');
    
    }

    public function hapus_guru($id){
        DB::table('guru')->where('id',$id)->delete();

        return redirect('/dataguru');
    }

}
