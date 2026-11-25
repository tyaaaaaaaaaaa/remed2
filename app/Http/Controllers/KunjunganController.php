<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KunjunganController extends Controller
{
    public function tambah($request) 
    {
        $request -> validate(['tb_kunjungan']) 
        ([
            
        ]);
    }
}
