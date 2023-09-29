<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\ConnectionException;

class kegiatanController extends Controller
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
            $kegiatan['kegiatans'] = Http::get('http://localhost:7075/kegiatan/')->collect();
            return view('formSearch5.kegiatan', $kegiatan);
        }catch (ConnectionException $e) {
            return response()->json(['Fungsi ini dalam proses perbaikan'], 500);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('forms5.daftarKegiatan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $response = Http::post('http://localhost:7075/kegiatan/', [
                'nama_kegiatan' => $request->get('cNamaKegiatan'),
                'jenis_kegiatan' => $request->get('cJenisKegiatan'),
                'jadwal_kegiatan' => $request->get('cJadwalKegiatan'),
                'lokasi_kegiatan' => $request->get('cLokasiKegiatan'),
            ]);
        
            if ($response->failed()) {
                return back()->withErrors(['message' => 'error when create kegiatan data']);
            }
        
            return redirect()->route('formSearch5.kegiatan'); 
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
            $res = Http::get('http://localhost:7075/kegiatan/{kegiatanId}'.$id);
        
            $data['kegiatans'] = $res->json();

            return view('forms5.detailKegiatan', $data);
        }catch (ConnectionException $e) {
            return response()->json(['Fungsi ini dalam proses perbaikan'], 500);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $res = Http::get('http://localhost:7075/kegiatan/{kegiatanId}'.$id);
        $data['kegiatans'] = $res->json();

        return view('forms5.editKegiatan', $data);
    }

    public function update(Request $request, string $id)
    {
        try {
            $res = Http::put('http://localhost:7075/kegiatan/{kegiatanId}'.$id, [
                'nama_kegiatan' => $request->cNamaKegiatan,
                'jenis_kegiatan' => $request->cJenisKegiatan,
                'jadwal_kegiatan' => $request->cJadwalKegiatan,
                'lokasi_kegiatan' => $request->cLokasiKegiatan,
            ]);
    
            if ($res->failed()) {
                return back()->withErrors(['message' => 'error when update kegiatan data']);
            }
    
            return redirect()->route('formSearch5.kegiatan');
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
            $res = Http::delete('http://localhost:7075/kegiatan/{kegiatanId}'.$id);
            $data['kegiatans'] = $res->json();

            return redirect()->route('formSearch5.kegiatan')->with('success', 'Kegiatan berhasil dihapus.');
        }catch (ConnectionException $e) {
            return response()->json(['Fungsi ini dalam proses perbaikan'], 500);
        }
    }
}
