<?php

namespace App\Http\Controllers;

use App\Models\Perizinan;
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
