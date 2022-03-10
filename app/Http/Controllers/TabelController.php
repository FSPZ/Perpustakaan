<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Data;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use File;
use Repsonse;
use App\Buku;

class TabelController extends Controller
{
    public function index()
{
    $tabel = Buku::all();
    return view('tabel.index', ['tabel' => $tabel]);


}

public function search(Request $request)
    {
        $search = Buku::where('judul_modul','like', "%" . $request->search . "%")->paginate(5);
        return view('tabel.index',['tabel' => $search]);
    }
 
    //   function getFile($filename){
    //   	$file=Storage::disk('public')->get($filename);
        
	//   	return (new Response($file, 200))
    //             ->header('Content-Type', 'file,doc,docx,rar,xlsx,PDF,pdf,jpg,jpeg,png');

    //       $files = Storage::files("public");
    //   	$a=array();
    //   	foreach ($files as $key => $value) {
    //   		$value= str_replace("public/assets/","",$value);
    //   		array_push($tabel,$value);
    //   	}
	//   return view('tabel.index', ['file_elektronik' => $a]);
    //   }

    //    public function download()
    //    {
    //        try{
    //            return Storage::disk('local')->download('public/assets',$filenameSimpan);
    //        }catch(\Exception $e){
    //            return $e->getMessage();
    //        }
    //    }

    //  public function download()
    // {
    // 	$myFile = storage_path("public/assets");


    // 	return response()->download($myFile);
    // }

      public function downfunc($request){
        $url = Storage::url("public/assets/$filenameSimpan");

          $downloads=DB::table('bukus')->get();
          return Storage::download("$url");
        //   return view('welcome',compact('downloads'));
        // dd($url);
      }


    // public function download()
    // {
    //     $path=public_path('public/assets',$filenameSimpan);
    //     return response()->download($path);
    // }



    // public function download_public(Request $request)
    // {
    //     if (Storage::disk('public')->exists("assets/$request->file")){
    //         $path = Storage::disk('public')->path("assets/$request->file");
    //         $content = file_get_contents($path);
    //         return response($content)->withHeaders([
    //             'content-Type' => mime_content_type($path)
    //         ]);
    //     }
    // }

}