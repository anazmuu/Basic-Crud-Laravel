<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 

class BeritaController extends Controller
{
    public function berita(){
        $berita = DB::table('berita')->get();
		//$news = news::get();
		return view('berita',['berita' => $berita]);
	}

    public function tambahberita(){
        return view('tambahberita');
    }

    public function proses_berita(Request $request){
		$this->validate($request, [
			'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
			'judul' => 'required',
            'deskripsi' => 'required',
		]);

    // menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');
 
		$nama_file = time()."_".$file->getClientOriginalName();
 
      	// isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);
  
		/* news::create([
			'file' => $nama_file,
			'judul' => $request->judul,
            'deskripsi' => $request->deskripsi
		]); */
       
        DB::table('berita')->insert([
            'file' => $nama_file,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi
        ]); 
        
 
		//return redirect()->back();
        return redirect('/berita');

    }

    public function editberita($id){
        $berita = DB::table('berita')->where('id',$id)->get();
        return view('editberita',['berita' => $berita]);
    }

    // update data siswa
    public function updateberita(Request $request)
    {  
        $this->validate($request, [
			'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
			'judul' => 'required',
            'deskripsi' => 'required',
		]);

        $file = $request->file('file');
 
		$nama_file = time()."_".$file->getClientOriginalName();
 
      	// isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);

        // update data siswa
        DB::table('berita')->where('id',$request->id)->update([
            'file' => $nama_file,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi
        ]);
        // alihkan halaman ke halaman siswa
        return redirect('/berita');
    }

	public function hapus_berita($id){
        DB::table('berita')->where('id',$id)->delete();

        return redirect('/berita');
    }
}
