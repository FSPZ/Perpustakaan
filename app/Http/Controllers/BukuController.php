<?php

namespace App\Http\Controllers;

use App\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $buku = Buku::latest()->paginate(5);

        return view('buku.index',compact('buku'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('buku.create');
    }

    public function store(Request $request)
    {
        
        $validasiData = $request->validate([
            'judul_modul' => 'required',
            'kode_modul' => 'required',
            'jenis_modul' => 'required',
            'lokasi_modul' => 'required',
            'file_elektronik' => 'mimes:doc,docx,rar,xlsx,PDF,pdf,jpg,jpeg,png|max:2000'
        ]);
        
         if ($request->hasfile('file_elektronik')) {
             $filenamewithExt = $request->file('file_elektronik')->getClientOriginalName();
             $filename = pathinfo($filenamewithExt, PATHINFO_FILENAME);
             $extension =$request->file('file_elektronik')->getClientOriginalExtension();
             $filenameSimpan = $filename.'_'.time().'.'.$extension;
            //  $validasiData = $request->file('file_elektronik')->storeAs('public/assets',$filenameSimpan);
            $validasiData['file_elektronik'] = $request->file('file_elektronik')->storeAS('public/assets',$filenameSimpan);
            //  dd($filenameSimpan);
         }

        Buku::create($validasiData);
        
            
            //   if ($request->hasfile('file_elektronik')) {            
                //    $file_elektronik = round(microtime(true) * 1000).'-'.str_replace(' ','-',$request->file('file_elektronik')->getClientOriginalName());
                //    $request->file('file_elektronik')->move(public_path('assets'), $file_elektronik);
                
                
                //        echo'Success';
            // }
            //     else{
            //         echo'Gagal';
            //     }
                
                // Buku::create($request->all());
                
                return redirect()->route('buku.index')
                ->with('success','Modul created successfully.');
                
                

    }
   public function show(Buku $buku)
    {
        return view('buku.show',compact('buku'));
    }

    public function edit(Buku $buku)
    {
        return view('buku.edit', compact('buku'));
    }

    public function update(Request $request, Buku $buku)
    {
        $request->validate([
            'judul_modul' => 'required',
            'kode_modul' => 'required',
            'jenis_modul' => 'required',
            'lokasi_modul' => 'required',
            'file_elektronik',
        ]);

        $buku->update($request->all());

        return redirect()->route('buku.index')
                        ->with('success','Modul updated successfully');
    }

    public function destroy(Buku $buku)
    {
        $buku->delete();

        return redirect()->route('buku.index')
                        ->with('success','Modul deleted successfully');
    }

}
