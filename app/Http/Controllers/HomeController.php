<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        try {
            $jemaat['jemaats'] = Http::get('http://localhost:7070/jemaat/')->collect();
            return view('formSearch.jemaat', $jemaat);
        }catch (ConnectionException $e) {
            return response()->json(['Fungsi ini dalam proses perbaikan'], 500);
        }
    }
}
