<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller
{
    public function pass()
    {
    	$a = "Aku Cinta Bandung";
    	return view('latihan', compact('a'));
    }

    public function pass1()
    {
    	$data = [
    		['nama' => 'Ucup', 'kelas' => 'RPL 2'],
    		['nama' => 'Icip', 'kelas' => 'RPL 3'],
    		['nama' => 'Ecep', 'kelas' => 'RPL 1']
    	];
    	return view('latihan1', ['siswa' => $data]);
    }

    public function gaji()
    {
    	$data = [
    		['nama' => 'Siva', 'nip' => '1234567', 'agama' => 'Islam', 'jk' => 'Perempuan',
    	     'jabatan' => 'Manager', 'jam_kerja' => 100], 
    	    ['nama' => 'Mita', 'nip' => '8901223', 'agama' => 'Islam', 'jk' => 'Perempuan',
    	     'jabatan' => 'Sekretaris', 'jam_kerja' => 180]
    	];
    	return view('gaji', ['gaji' => $data]);
    }
}
