<?php

namespace Database\Seeders;

use App\Models\Portfolio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'title'         => 'Sistem Manajemen Absensi',
                'slug'          => 'sistem-manajemen-absensi',
                'client'        => 'PT. PIM Prima Medika',
                'project_date'  => '2022-04-30',
                'status'        => 'Complete',
                'description'   => 'Aplikasi berbasis website untuk melakukan manajemen absensi karyawan di lingkungan perusahaan untuk selanjutnya dapat dilakukan rekapitulasi kedisiplinan karyawan di lingkup perusahaan'
            ],
            
            [
                'title'         => 'Sistem Manajemen Aset',
                'slug'          => 'sistem-manajemen-aset',
                'client'        => 'Jurusan Teknik Elektro, Universitas Malikussaleh',
                'project_date'  => '2022-07-31',
                'status'        => 'On Progress',
                'description'   => 'Aplikasi berbasis website untuk melakukan manajemen aset atau inventaris'
            ],
        ];


        foreach($data as $d){
            Portfolio::create($d);
        }
    }
}
