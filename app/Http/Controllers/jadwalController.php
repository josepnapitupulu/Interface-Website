<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\ConnectionException;

class jadwalController extends Controller
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
            $jadwal['jadwals'] = Http::get('http://localhost:7077/jadwal/')->collect();
            return view('formSearch4.jadwal', $jadwal);
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
            return view('forms4.daftarJadwal');
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
            $response = Http::post('http://localhost:7077/jadwal/', [
                'nama_minggu' => $request->get('cNamaMinggu'),
                'tanggal_ibadah' => $request->get('cTanggalIbadah'),
                'waktu_ibadah' => $request->get('cWaktuIbadah'),
                'penkotbah' => $request->get('cPenkotbah'),
                'shift' => $request->get('cShift'),
            ]);
        
            if ($response->failed()) {
                return back()->withErrors(['message' => 'error when create jadwal data']);
            }
        
            return redirect()->route('formSearch4.jadwal');
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
            $res = Http::get('http://localhost:7077/jadwal/{jadwalId}'.$id);
        
            $data['jadwals'] = $res->json();

            return view('forms4.detailJadwal', $data);
        }catch (ConnectionException $e) {
            return response()->json(['Fungsi ini dalam proses perbaikan'], 500);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $res = Http::get('http://localhost:7077/jadwal/{jadwalId}'.$id);
        $data['jadwals'] = $res->json();

        return view('forms4.editJadwal', $data);
    }

    public function update(Request $request, string $id)
    {
        try {
            $res = Http::put('http://localhost:7077/jadwal/{jadwalId}'.$id, [
                'nama_minggu' => $request->cNamaMinggu,
                'tanggal_ibadah' => $request->cTanggalIbadah,
                'waktu_ibadah' => $request->cWaktuIbadah,
                'penkotbah' => $request->cPenkotbah,
                'shift' => $request->cShift,
            ]);
    
            if ($res->failed()) {
                return back()->withErrors(['message' => 'error when update jadwal data']);
            }
    
            return redirect()->route('formSearch4.jadwal');
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
            $res = Http::delete('http://localhost:7077/jadwal/{jadwalId}'.$id);
            $data['jadwals'] = $res->json();

            return redirect()->route('formSearch4.jadwal')->with('success', 'Jadwal berhasil dihapus.');
        }catch (ConnectionException $e) {
            return response()->json(['Fungsi ini dalam proses perbaikan'], 500);
        }
    }
}
