<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pemain;

class PemainController extends Controller
{
    public function index() {
        $pemain = Pemain::all();
        return view('pemain.index', compact('pemain'));
    }
}
