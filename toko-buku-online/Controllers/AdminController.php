<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AdminController extends BaseController
{
    public function index()
    {
        return view('admin/dashboard');
    }

    public function daftarBuku(){
        return view('admin/daftar-buku');
    }

    public function daftarBukuTambah(){
        return view('admin/daftar-buku-tambah');
    }

    public function daftarBukuEdit(){
        return view('admin/daftar-buku-edit');
    }

    public function daftarBukuHapus(){
        return view('admin/daftar-buku-hapus');
    }

    public function transaksi(){
        return view('admin/transaksi');
    }

    public function transaksiUbahStatus(){
        return view('admin/transaksi-ubah-status');
    }

    public function transaksiHapus(){
        return view('admin/transaksi-hapus');
    }

    public function pelanggan(){
        return view('admin/pelanggan');
    }

    public function pelangganHapus(){
        return view('admin/pelanggan-hapus');
    }
}