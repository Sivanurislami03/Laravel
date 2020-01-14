<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SekolahController extends Controller
{
    public function halo()
    {
    	return "Halo Dunia";
    }

    public function negara()
    {
    	return "Selamat Datang Di Negara Indonesia";
    }

    public function sekolah()
    {
    	return "Selamat Datang Di SMK Assalaam Bandung";
    }

    public function jurusan()
    {
    	return "Terdapat 3 Jurusan Di SMK Assalaam Bandung yaitu TKR, RPL dan TSM";
    }

    public function rpl()
    {
    	return "Jurusan RPL mengajarkan tentang membuat aplikasi";
    }

    public function tkr()
    {
    	return "Jurusan TKR mengajarkan tentang Teknik Kendaraan Ringan";
    }

    public function alamat()
    {
    	return "Alamat ku di kp Parunghalang";
    }

    public function jeniskucing($warna=null)
    {
    	if(!$warna){
		// return "Warna Kucing Kamu : " .$warna;
    	return "Warna Belum Di Pilih";
	    } else {
    	return "Warna Kucing Kamu : " .$warna;
        }
    }


    public function penjualan($mkn=null, $hrg=null)
    {
    	if (!$mkn) {
    		$a = "Anda Membeli $mkn";
    		echo $a;
    	}
    	if ($hrg) {
    	    if ($hrg >= 15000) {
    		    echo "Anda Membeli $mkn Dengan Ukuran Jumbo";
    	    }
   		    elseif ($hrg < 15000 && $hrg >= 7500) {
   			    echo "Anda Membeli $mkn Dengan Ukuran Medium";
   		    }
   		    elseif ($hrg < 7500) {
   			    echo "Anda Membeli $mkn Dengan Ukuran Small";
    	    }
        }
        if (!$mkn) {
        	return "Silahkan Masukkan Item Terlebih Dahulu";
        }
    }
}
