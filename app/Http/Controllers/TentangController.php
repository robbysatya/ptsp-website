<?php

namespace App\Http\Controllers;

class TentangController extends Controller
{
    public function index()
    {

    }

    public function profil_organisasi()
    {
        return view('pages.tentang.profil_organisasi', [
            'title' => 'Profil Organisasi',
        ]);
    }

    public function visi_misi()
    {
        return view('pages.tentang.visi_misi', [
            'title' => 'Visi dan Misi',
        ]);
    }

    public function tugas_pokok()
    {
        return view('pages.tentang.tugas_pokok', [
            'title' => 'Tugas Pokok dan Fungsi',
        ]);
    }

    public function struktur_organisasi()
    {
        return view('pages.tentang.struktur_organisasi', [
            'title' => 'Struktur Organisasi',
        ]);
    }

    public function perencanaan_pelaporan()
    {
        return view('pages.tentang.perencanaan_pelaporan', [
            'title' => 'Perencanaan dan Pelaporan',
        ]);
    }
}
