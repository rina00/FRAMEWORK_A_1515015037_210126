<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
  public function awal ()
  {
  return "mahasiswa";
}
	public function tambah ()
	{
		return $this->simpan();
	}
	public function simpan() 
	{
			$mahasiswa= new Mahasiswa();
			$mahasiswa->nama = 'Rina';
			$mahasiswa->nim = '1515015037';
			$mahasiswa->alamat= 'jl M.yamin';
			$mahasiswa->pengguna_id='1';
			$mahasiswa->save();
		return "data dengan nama {$mahasiswa->nama} telah disimpan";
}
}
