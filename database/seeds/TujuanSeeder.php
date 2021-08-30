<?php

use App\Tujuan;
use Illuminate\Database\Seeder;

class TujuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tujuan::create([
            'nama' => 'Tanpa Kemiskinan',

        ]);

        Tujuan::create([
            'nama' => 'Tanpa Kelaparan',

        ]);

        Tujuan::create([
            'nama' => 'Kehidupan Sehat dan Sejahtera',
        ]);

        Tujuan::create([
            'nama' => 'Pendidikan Berkualitas',
        ]);

        Tujuan::create([
            'nama' => 'Kesetaraan Gender',
        ]);

        Tujuan::create([
            'nama' => 'Air Bersih dan Sanitasi Layak',
        ]);

        Tujuan::create([
            'nama' => 'Energi Bersih dan Terjangkau',
        ]);

        Tujuan::create([
            'nama' => 'Pekerjaan Layak dan Pertumbuhan Ekonomi',
        ]);

        Tujuan::create([
            'nama' => 'Industri, Inovasi, dan Infrastruktur',
        ]);

        Tujuan::create([
            'nama' => 'Berkurangnya Kesenjangan',
        ]);

        Tujuan::create([
            'nama' => 'Kota dan Pemukiman yang Berkelanjutan',
        ]);

        Tujuan::create([
            'nama' => 'Konsumsi dan Produksi yang Bertanggung Jawab',
        ]);

        Tujuan::create([
            'nama' => 'Penanganan Perubahan Iklim',
        ]);

        Tujuan::create([
            'nama' => 'Ekosistem Lautan',
        ]);

        Tujuan::create([
            'nama' => 'Ekosistem Daratan',
        ]);

        Tujuan::create([
            'nama' => 'Perdamaian, Keadilan dan Kelembagaan yang Tangguh',
        ]);

        Tujuan::create([
            'nama' => 'Kemitraan untuk Mencapai Tujuan',
        ]);
    }
}
