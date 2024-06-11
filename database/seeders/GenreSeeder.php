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
            'descripsi' => 'Kebalikan dari shoujo, genre anime ini diproduksi untuk para remaja laki-laki pada kelompok umur 12—18 tahun. Shounen sendiri diambil dari bahasa Kanji yang artinya anak laki-laki.',
        ]);
        Genre::create([
            'id' => 2,
            'name' => 'Drama',
            'descripsi' => 'Genre drama menyajikan cerita tentang kehidupan dengan situasi yang kompleks, emosional dan penuh konflik batin. ',
        ]);
        Genre::create([
            'id' => 3,
            'name' => 'School',
            'descripsi' => 'Anime genre ini mengambil setting dan latar belakang sekolah. Kisahnya pun mengangkat kehidupan di sekolah, misalnya, konflik antarsiswa atau siswa dengan gurunya.',
        ]);
        Genre::create([
            'id' => 4,
            'name' => 'Action',
            'descripsi' => 'Anime action merupakan jenis anime yang bertemakan aksi laga. Genre ini menjadi salah satu genre anime paling populer. Biasanya mengandung unsur perkelahian, pertarungan dan peperangan penuh aksi dan jurus-jurus keren.',
        ]);
        Genre::create([
            'id' => 5,
            'name' => 'Shoujo',
            'descripsi' => 'Shoujo adalah kata dalam bahasa Kanji yang berarti anak perempuan. Ya, genre shoujo ini memang dibuat bagi para remaja perempuan. Mayoritas fans anime beranggapan bahwa genre ini identik dengan kisah percintaan dan tokoh utamanya perempuan, padahal tidak demikian.',
        ]);
    }
}