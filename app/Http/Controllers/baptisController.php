<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\ConnectionException;

class baptisController extends Controller
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
            $baptis['baptis'] = Http::get('http://localhost:7073/baptis/')->collect();
            return view('formSearch2.baptis', $baptis);
        }catch (ConnectionException $e) {
            return response()->json(['Fungsi ini dalam proses perbaikan'], 500);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {
            return view('forms2.daftarBaptis');
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
            $response = Http::post('http://localhost:7073/baptis/', [
                'nik' => $request->get('cNik'),
                'nama_anak' => $request->get('cNamaAnak'),
                'tanggal_Baptis' => $request->get('cTanggalBaptis'),
                'tanggal_lahir' => $request->get('cTanggalLahir'),
                'nama_ayah' => $request->get('cNamaAyah'),
                'nama_ibu' => $request->get('cNamaIbu'),
                'alamat' => $request->get('cAlamat'),
            ]);
        
            if ($response->failed()) {
                return back()->withErrors(['message' => 'error when create Baptis data']);
            }
        
            return redirect()->route('formSearch2.baptis'); 
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
            $res = Http::get('http://localhost:7073/baptis/{baptisId}'.$id);
        
            $data['baptis'] = $res->json();

            return view('forms2.detailBaptis', $data);
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
            $res = Http::get('http://localhost:7073/baptis/{baptisId}'.$id);
        
            $data['baptis'] = $res->json();

            return view('forms2.editBaptis', $data);
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
            $res = Http::put('http://localhost:7073/baptis/{baptisId}'.$id, [
                'nik' => $request->cNik,
                'nama_anak' => $request->cNamaAnak,
                'tanggal_Baptis' => $request->cTanggalBaptis,
                'tanggal_lahir' => $request->cTanggalLahir,
                'nama_ayah' => $request->cNamaAyah,
                'nama_ibu' => $request->cNamaIbu,
                'alamat' => $request->cAlamat,
            ]);
    
            if ($res->failed()) {
                return back()->withErrors(['message' => 'error when update baptis data']);
            }
    
            return redirect()->route('formSearch2.baptis');
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
            $res = Http::delete('http://localhost:7073/baptis/{baptisId}'.$id);
            $data['baptis'] = $res->json();

            return redirect()->route('formSearch2.baptis')->with('success', 'Baptis berhasil dihapus.');
        }catch (ConnectionException $e) {
            return response()->json(['Fungsi ini dalam proses perbaikan'], 500);
        }
    }
}
