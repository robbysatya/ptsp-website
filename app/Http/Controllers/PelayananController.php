<?php

namespace App\Http\Controllers;

use App\Models\Perizinan;
use App\Models\Sop;
use App\Models\StandarPelayanan;
use Illuminate\Http\Request;

class PelayananController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function index()
    {

    }

    public function perizinan_online()
    {
        return view('pages.pelayanan.perizinan_online', [
            'title' => 'Perizinan Online',
        ]);
    }

    public function layanan_perbantuan()
    {
        return view('pages.pelayanan.layanan_perbantuan', [
            'title' => 'Layanan Perbantuan',
        ]);
    }

    public function faq()
    {
        return view('pages.pelayanan.FAQ', [
            'title' => 'FAQ',
        ]);
    }

//    Menu Informasi Perizinan
    public function standar_pelayanan()
    {
        $standar_pelayanan = StandarPelayanan::query()
            ->orderBy('id', 'desc')
            ->paginate(10);

        return view('pages.pelayanan.informasi perizinan.standar_pelayanan', [
            'title' => 'Standar Pelayanan',
            'standar_pelayanan' => $standar_pelayanan
        ]);
    }

    public function sop()
    {
        $sop = Sop::query()
            ->orderBy('id', 'desc')
            ->paginate(5);

        return view('pages.pelayanan.informasi perizinan.standar_operasional_pelayanan', [
            'title' => 'Standar Operasional',
            'standar_operasional' => $sop
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Perizinan $perizinan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Perizinan $perizinan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Perizinan $perizinan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Perizinan $perizinan)
    {
        //
    }
}
