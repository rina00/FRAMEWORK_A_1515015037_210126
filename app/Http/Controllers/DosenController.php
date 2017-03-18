<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Dosen;

class DosenController extends Controller
{
  public function awal ()
  {
  return "laman Dosen";
}
	public function tambah ()
	{
		return $this->simpan();
	}
	public function simpan() 
	{
			$mahasiswa= new Dosen();
			$mahasiswa->nama = 'Herman';
			$mahasiswa->nim = '123456789';
			$mahasiswa->alamat= 'jl gelatik';
			$mahasiswa->pengguna_id='1';
			$mahasiswa->save();
		return "data dengan dosen{$dosen->nama} telah disimpan";

}
  
}
