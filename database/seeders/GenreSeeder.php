<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'id' => 1,
            'name' => 'Shounen',
            'descripsi' => 'Secara harfiah, shounen memiliki arti anak laki-laki. Mengutip Kotaku, istilah shounen umumnya merujuk pada anak laki-laki di bawah umur 15 tahun. Jadi, anime dan manga yang disebut shounen ditujukan untuk penonton di usia tersebut.',
        ]);
        Genre::create([
            'id' => 2,
            'name' => 'Drama',
            'descripsi' => 'Drama adalah komposisi syair atau prosa yang diharapkan dapat menggambarkan kehidupan dan watak, melalui tingkah laku (akting) atau dialog yang dipentaskan.',
        ]);
        Genre::create([
            'id' => 3,
            'name' => 'School',
            'descripsi' => 'Anime genre ini mengambil setting dan latar belakang sekolah. Kisahnya pun mengangkat kehidupan di sekolah, misalnya, konflik antarsiswa atau siswa dengan gurunya. Contoh anime school of life adalah My Hero Academia, Kokoro Conect, juga Ansatsu Kyoushitsu.',
        ]);
        Genre::create([
            'id' => 4,
            'name' => 'Action',
            'descripsi' => 'Anime action merupakan jenis anime yang bertemakan aksi laga. Genre ini menjadi salah satu genre anime paling populer. Biasanya mengandung unsur perkelahian, pertarungan dan peperangan penuh aksi dan jurus-jurus keren.',
        ]);
    }
}