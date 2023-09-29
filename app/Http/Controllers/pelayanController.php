<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\ConnectionException;

class pelayanController extends Controller
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
            $pelayan['pelayans'] = Http::get('http://localhost:7074/pelayan/')->collect();
            return view('formSearch7.pelayan', $pelayan);
        }catch (ConnectionException $e) {
            return response()->json(['Fungsi ini dalam proses perbaikan'], 500);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('forms7.daftarPelayan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $response = Http::post('http://localhost:7074/pelayan/', [
                'nik' => $request->get('cNIK'),
                'nama_pelayan' => $request->get('cNamaPelayan'),
                'tahbisan' => $request->get('cTahbisan'),
                'pendidikan' => $request->get('cPendidikan'),
                'bidang_pendidikan' => $request->get('cBidangPendidikan'),
                'pekerjaan' => $request->get('cPekerjaan'),
                'alamat' => $request->get('cAlamat'),
            ]);
        
            if ($response->failed()) {
                return back()->withErrors(['message' => 'error when create pelayan data']);
            }
        
            return redirect()->route('formSearch7.pelayan');
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
            $res = Http::get('http://localhost:7074/pelayan/{pelayanId}'.$id);
        
            $data['pelayans'] = $res->json();

            return view('forms7.detailPelayan', $data);
        }catch (ConnectionException $e) {
            return response()->json(['Fungsi ini dalam proses perbaikan'], 500);
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $res = Http::get('http://localhost:7074/pelayan/{pelayanId}'.$id);
        
        $data['pelayans'] = $res->json();

        return view('forms7.editPelayan', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $res = Http::put('http://localhost:7074/pelayan/{pelayanId}'.$id, [
                'nik' => $request->cNIK,
                'nama_pelayan' => $request->cNamaPelayan,
                'tahbisan' => $request->cTahbisan,
                'pendidikan' => $request->cPendidikan,
                'bidang_pendidikan' => $request->cBidangPendidikan,
                'pekerjaan' => $request->cPekerjaan,
                'alamat' => $request->cAlamat,
            ]);
            if ($res->failed()) {
                return back()->withErrors(['message' => 'error when create pelayan data']);
            }
        
            return redirect()->route('formSearch7.pelayan');
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
            $res = Http::delete('http://localhost:7074/pelayan/{pelayanId}'.$id);
            $data['pelayans'] = $res->json();

            return redirect()->route('formSearch7.pelayan')->with('success', 'Pelayan berhasil dihapus.');
        }catch (ConnectionException $e) {
            return response()->json(['Fungsi ini dalam proses perbaikan'], 500);
        }
        
    }
}
