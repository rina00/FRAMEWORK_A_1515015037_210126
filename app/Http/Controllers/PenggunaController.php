<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Pengguna;

class PenggunaController extends Controller
{
     public function awal ()
  {
  return "heloo Pengguna controller";
}
	public function tambah ()
	{
		return $this->simpan();
	}
	public function simpan() 
	{
			$pengguna= new Pengguna;
			$pengguna->username = 'rina';
			$pengguna->password = '12345';
			$pengguna->save();
		return "data dengan username {$pengguna->username}telah disimpan";
	}

}