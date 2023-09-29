<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\ConnectionException;

class martumpolController extends Controller
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
            $martumpol['martumpols'] = Http::get('http://localhost:7076/martumpol/')->collect();
            return view('formSearch6.martumpol', $martumpol); 
        }catch (ConnectionException $e) {
            return response()->json(['Fungsi ini dalam proses perbaikan'], 500);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('forms6.daftarMartumpol');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $response = Http::post('http://localhost:7076/martumpol/', [
                'nama_mempelai_laki' => $request->get('cNamaMempelaiLaki'),
                'alamat_mempelai_laki' => $request->get('cAlamatMempelaiLaki'),
                'tanggal_martumpol' => $request->get('cTanggalMartumpol'),
                'nama_ayah_mempelai_laki' => $request->get('cNamaAyahMempelaiLaki'),
                'nama_ibu_mempelai_laki' => $request->get('cNamaIbuMempelaiLaki'),
                'nama_lengkap_mempelai_perempuan' => $request->get('cNamaLengkapMempelaiPerempuan'),
                'alamat_mempelai_perempuan' => $request->get('cAlamatMempelaiPerempuan'),
                'nama_ayah_mempelai_perempuan' => $request->get('cNamaAyahMempelaiPerempuan'),
                'nama_ibu_mempelai_perempuan' => $request->get('cNamaIbuMempelaiPerempuan'),
            ]);
        
            if ($response->failed()) {
                return back()->withErrors(['message' => 'error when create martumpol data']);
            }
        
            return redirect()->route('formSearch6.martumpol');
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
            $res = Http::get('http://localhost:7076/martumpol/{martumpolId}'.$id);
        
            $data['martumpols'] = $res->json();

            return view('forms6.detailMartumpol', $data);
        }catch (ConnectionException $e) {
            return response()->json(['Fungsi ini dalam proses perbaikan'], 500);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $res = Http::get('http://localhost:7076/martumpol/{martumpolId}'.$id);
        
        $data['martumpols'] = $res->json();

        return view('forms6.editMartumpol', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $res = Http::put('http://localhost:7076/martumpol/{martumpolId}'.$id, [
                'nama_mempelai_laki' => $request->cNamaMempelaiLaki,
                'alamat_mempelai_laki' => $request->cAlamatMempelaiLaki,
                'tanggal_martumpol' => $request->cTanggalMartumpol,
                'nama_ayah_mempelai_laki' => $request->cNamaAyahMempelaiLaki,
                'nama_ibu_mempelai_laki' => $request->cNamaIbuMempelaiLaki,
                'nama_lengkap_mempelai_perempuan' => $request->cNamaLengkapMempelaiPerempuan,
                'alamat_mempelai_perempuan' => $request->cAlamatMempelaiPerempuan,
                'ayah_mempelai_perempuan' => $request->cNamaAyahMempelaiPerempuan,
                'nama_ibu_mempelai_perempuan' => $request->cNamaIbuMempelaiPerempuan,
            ]);
            if ($res->failed()) {
                return back()->withErrors(['message' => 'error when create martumpol data']);
            }
        
            return redirect()->route('formSearch6.martumpol');
        }catch (ConnectionException $e) {
            return response()->json(['Fungsi ini dalam proses perbaikan'], 500);
        }
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $res = Http::delete('http://localhost:7076/martumpol/{martumpolId}'.$id);
            $data['martumpols'] = $res->json();

            return redirect()->route('formSearch6.martumpol')->with('success', 'Martumpol berhasil dihapus.');
        }catch (ConnectionException $e) {
            return response()->json(['Fungsi ini dalam proses perbaikan'], 500);
        }
        
    }
}
