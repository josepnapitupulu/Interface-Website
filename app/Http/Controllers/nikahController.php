<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\ConnectionException;

class nikahController extends Controller
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
            $nikah['nikahs'] = Http::get('http://localhost:7072/nikah/')->collect();
            return view('formSearch3.nikah', $nikah);
        }catch (ConnectionException $e) {
            return response()->json(['Fungsi ini dalam proses perbaikan'], 500);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('forms3.daftarNikah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $response = Http::post('http://localhost:7072/nikah/', [
                'nama_mempelai_laki' => $request->get('cNamaMempelaiLaki'),
                'alamat_mempelai_laki' => $request->get('cAlamatMempelaiLaki'),
                'tanggal_pernikahan' => $request->get('cTanggalPernikahan'),
                'nama_ayah_mempelai_laki' => $request->get('cNamaAyahMempelaiLaki'),
                'nama_ibu_mempelai_laki' => $request->get('cNamaIbuMempelaiLaki'),
                'nama_lengkap_mempelai_perempuan' => $request->get('cNamaLengkapMempelaiPerempuan'),
                'alamat_mempelai_perempuan' => $request->get('cAlamatMempelaiPerempuan'),
                'ayah_mempelai_perempuan' => $request->get('cNamaAyahMempelaiPerempuan'),
                'nama_ibu_mempelai_perempuan' => $request->get('cNamaIbuMempelaiPerempuan'),
            ]);
        
            if ($response->failed()) {
                return back()->withErrors(['message' => 'error when create nikah data']);
            }
        
            return redirect()->route('formSearch3.nikah');
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
            $res = Http::get('http://localhost:7072/nikah/{nikahId}'.$id);
        
            $data['nikahs'] = $res->json();

            return view('forms3.detailNikah', $data);
        }catch (ConnectionException $e) {
            return response()->json(['Fungsi ini dalam proses perbaikan'], 500);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $res = Http::get('http://localhost:7072/nikah/{nikahId}'.$id);
        
        $data['nikahs'] = $res->json();

        return view('forms3.editNikah', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $res = Http::put('http://localhost:7072/nikah/{nikahId}'.$id, [
                'nama_mempelai_laki' => $request->cNamaMempelaiLaki,
                'alamat_mempelai_laki' => $request->cAlamatMempelaiLaki,
                'tanggal_pernikahan' => $request->cTanggalPernikahan,
                'nama_ayah_mempelai_laki' => $request->cNamaAyahMempelaiLaki,
                'nama_ibu_mempelai_laki' => $request->cNamaIbuMempelaiLaki,
                'nama_lengkap_mempelai_perempuan' => $request->cNamaLengkapMempelaiPerempuan,
                'alamat_mempelai_perempuan' => $request->cAlamatMempelaiPerempuan,
                'ayah_mempelai_perempuan' => $request->cNamaAyahMempelaiPerempuan,
                'nama_ibu_mempelai_perempuan' => $request->cNamaIbuMempelaiPerempuan,
            ]);
            if ($res->failed()) {
                return back()->withErrors(['message' => 'error when create nikah data']);
            }
        
            return redirect()->route('formSearch3.nikah');
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
            $res = Http::delete('http://localhost:7072/nikah/{nikahId}'.$id);
            $data['nikahs'] = $res->json();

            return redirect()->route('formSearch3.nikah')->with('success', 'Nikah berhasil dihapus.');
        }catch (ConnectionException $e) {
            return response()->json(['Fungsi ini dalam proses perbaikan'], 500);
        }
        
    }
}
