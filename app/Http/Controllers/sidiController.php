<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\ConnectionException;

class sidiController extends Controller
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
            $sidi['sidis'] = Http::get('http://localhost:7071/sidi/')->collect();
            return view('formSearch1.sidi', $sidi);
        } catch (ConnectionException $e) {
            return response()->json(['Fungsi ini dalam proses perbaikan'], 500);
        }     
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {
            return view('forms1.daftarSidi');
        }catch (ConnectionException $e) {
            return response()->json(['Fungsi ini dalam proses perbaikan'], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $response = Http::post('http://localhost:7071/sidi/', [
                'nik' => $request->get('cNik'),
                'nama_jemaat' => $request->get('cNamaJemaat'),
                'tanggal_sidi' => $request->get('cTanggalSidi'),
                'tanggal_lahir' => $request->get('cTanggalLahir'),
                'nama_pendeta' => $request->get('cNamaPendeta'),
                'alamat' => $request->get('cAlamat'),
            ]);
        
            if ($response->failed()) {
                return back()->withErrors(['message' => 'error when create Sidi data']);
            }
        
            return redirect()->route('formSearch1.sidi');
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
            $res = Http::get('http://localhost:7071/sidi/{sidiId}'.$id);
        
            $data['sidis'] = $res->json();

            return view('forms1.detailSidi', $data);
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
            $res = Http::get('http://localhost:7071/sidi/{sidiId}'.$id);
            $data['sidis'] = $res->json();

            return view('forms1.editSidi', $data);
        }catch (ConnectionException $e) {
            return response()->json(['Fungsi ini dalam proses perbaikan'], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $res = Http::put('http://localhost:7071/sidi/{sidiId}'.$id, [
                'nik' => $request->cNik,
                'nama_jemaat' => $request->cNamaJemaat,
                'tanggal_sidi' => $request->cTanggalSidi,
                'tanggal_lahir' => $request->cTanggalLahir,
                'nama_pendeta' => $request->cNamaPendeta,
                'alamat' => $request->cAlamat,
            ]);
    
            if ($res->failed()) {
                return back()->withErrors(['message' => 'error when update sidi data']);
            }
    
            return redirect()->route('formSearch1.sidi');
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
            $res = Http::delete('http://localhost:7071/sidi/{sidiId}'.$id);
            $data['sidis'] = $res->json();

            return redirect()->route('formSearch1.sidi')->with('success', 'Sidi berhasil dihapus.');
        }catch (ConnectionException $e) {
            return response()->json(['Fungsi ini dalam proses perbaikan'], 500);
        }
    }
}
