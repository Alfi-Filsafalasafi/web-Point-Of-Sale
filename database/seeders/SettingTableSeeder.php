<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('setting')->insert([
            'id_setting' => 1,
            'nama_perusahaan' => 'Toko Alfi',
            'alamat' => 'Jl. Raden Wijaya No.08 Sudan Wonosari',
            'telepon' => '085232842XXX',
            'tipe_nota' => 1, // kecil
            'diskon' => 5,
            'path_logo' => '/images/logo.png',
            'path_kartu_member' => '/images/member.png',
        ]);
    }
}
