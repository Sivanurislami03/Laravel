<?php

use App\Crud;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class CrudSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$no = 10;
    	for ($i = 0; $i < $no; $i++) {
        $artikel = new Crud();
        $artikel->judul = 'Beternak Lele Seri Ke-' .$i;
        $artikel->slug = Str::slug($artikel->judul, '-');
        $artikel->deskripsi = 'Lorem Ipsum';
        $artikel->sinopsis = Str::limit($artikel->deskripsi, 50);
        $artikel->save();
        }
    }
}
