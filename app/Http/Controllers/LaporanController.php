<?php

namespace App\Http\Controllers;

use App\Models\provinsi;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class LaporanController extends Controller
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
    public function index()
    {
        $client = new Client();
        $url = 'https://emsifa.github.io/api-wilayah-indonesia/api/provinces.json';
        $provinsi = json_decode($client->request('GET', $url)->getBody()->getContents());
        return view('pages/laporan/laporan',compact('provinsi'));
    }

    
}
