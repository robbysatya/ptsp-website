<?php

namespace App\Http\Controllers;

class PengaduanController extends Controller
{
    public function index()
    {

    }

    public function pengaduan_online()
    {
        return view('pages.pengaduan.pengaduan_online', [
            'title' => 'Pengaduan Online',
        ]);
    }

    public function whistleblowing()
    {
        return view('pages.pengaduan.whistleblowing', [
            'title' => 'Whistleblowing',
        ]);
    }

    public function standar_pengaduan()
    {
        return view('pages.pengaduan.standar_pengaduan', [
            'title' => 'Standar Pelayanan Pengaduan',
        ]);
    }

    public function sop_penanganan_pengaduan()
    {
        return view('pages.pengaduan.sop_penanganan_pengaduan', [
            'title' => 'SOP Penanganan Pengaduan',
        ]);
    }
}
