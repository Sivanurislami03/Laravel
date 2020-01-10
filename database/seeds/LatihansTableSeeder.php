<?php

use Illuminate\Database\Seeder;

class LatihansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a = [
        	['nama'=>'Siva', 'jabatan'=>'Manager', 'jk'=>'Perempuan',
        	 'Alamat'=>'Parhal', 'Agama'=>'Islam', 'total_gaji'=>'10.000.000'],
        	['nama'=>'Mita', 'jabatan'=>'Staf', 'jk'=>'Perempuan',
        	 'Alamat'=>'Cianjur', 'Agama'=>'Islam', 'total_gaji'=>'5.000.000'],
        	['nama'=>'Nathan', 'jabatan'=>'Staf', 'jk'=>'Perempuan',
        	 'Alamat'=>'Rancamanyar', 'Agama'=>'Islam', 'total_gaji'=>'5.000.000'],
        	['nama'=>'Sabina', 'jabatan'=>'Staf', 'jk'=>'Perempuan',
        	 'Alamat'=>'Tarate', 'Agama'=>'Islam', 'total_gaji'=>'5.000.000'],
        	['nama'=>'Renasya', 'jabatan'=>'OB', 'jk'=>'Perempuan',
        	 'Alamat'=>'Sekeperis', 'Agama'=>'Islam', 'total_gaji'=>'2.000.000']
        ];

        DB::table('latihans')->insert($a);
    }
}
