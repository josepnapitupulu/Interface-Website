<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Client\ConnectionException;

class jemaatController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function __construct()
     {
         $this->middleware('auth');
     }

    public function index()
    {
        try {
            $jemaat['jemaats'] = Http::get('http://localhost:7070/jemaat/')->collect();
            return view('formSearch.jemaat', $jemaat);
        }catch (ConnectionException $e) {
            return response()->json(['Fungsi ini dalam proses perbaikan'], 500);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('forms.daftarJemaat');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $response = Http::post('http://localhost:7070/jemaat/', [
                'nik' => $request->get('cNik'),
                'nama_jemaat' => $request->get('cNamaJemaat'),
                'tempat_lahir' => $request->get('cTempatLahir'),
                'jenis_kelamin' => $request->get('cJenisKelamin'),
                'alamat' => $request->get('cAlamat'),
                'no_hp' => $request->get('cNoHp'),
            ]);
        
            if ($response->failed()) {
                return back()->withErrors(['message' => 'error when create jemaat data']);
            }
        
            return redirect()->route('formSearch.jemaat');
        }catch (ConnectionException $e) {
            return response()->json(['Fungsi ini dalam proses perbaikan'], 500);
        }
        
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $res = Http::get('http://localhost:7070/jemaat/{jemaatId}'.$id);
        
            $data['jemaats'] = $res->json();
    
            return view('forms.detailJemaat', $data); 
        }catch (ConnectionException $e) {
            return response()->json(['Fungsi ini dalam proses perbaikan'], 500);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try {
            $res = Http::get('http://localhost:7070/jemaat/{jemaatId}'.$id);
            $data['jemaats'] = $res->json();

            return view('forms.editJemaat', $data);
        }catch (ConnectionException $e) {
            return response()->json(['Fungsi ini dalam proses perbaikan'], 500);
        }
    }

    public function update(Request $request, string $id)
    {
        try {
            $res = Http::put('http://localhost:7070/jemaat/{jemaatId}'.$id, [
                'nama_jemaat' => $request->cNamaJemaat,
                'tempat_lahir' => $request->cTempatLahir,
                'jenis_kelamin' => $request->cJenisKelamin,
                'alamat' => $request->cAlamat,
                'no_hp' => $request->cNoHp,
            ]);
    
            if ($res->failed()) {
                return back()->withErrors(['message' => 'error when update jemaat data']);
            }
    
            return redirect()->route('formSearch.jemaat');
        }catch (ConnectionException $e) {
            return response()->json(['Fungsi ini dalam proses perbaikan'], 500);
        }
    }

    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $res = Http::delete('http://localhost:7070/jemaat/{jemaatId}'.$id);
            $data['jemaats'] = $res->json();

            return redirect()->route('formSearch.jemaat')->with('success', 'Jemaat berhasil dihapus.');
        }catch (ConnectionException $e) {
            return response()->json(['Fungsi ini dalam proses perbaikan'], 500);
        }
        
    }

}
