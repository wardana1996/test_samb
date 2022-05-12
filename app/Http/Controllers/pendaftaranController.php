<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelamar;
use App\Http\Requests\pelamarRequest;

class pendaftaranController extends Controller
{
    public function create(pelamarRequest $request)
    {
        $pelamar = new Pelamar();
        $pelamar->nama_lengkap = $request->nama_lengkap;
        $pelamar->no_telp =  $request->no_telp;
        $pelamar->no_wa =  $request->no_wa;
        $pelamar->nama_pekerjaan =  $request->nama_pekerjaan;
        $pelamar->save();
       
        return response()->json(['message'=>'success !']);
    }
}
