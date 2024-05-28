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
            'title' => 'Shounen',
            'descripsi' => ' genre yang ditujukan khusus untuk pemirsa laki-laki muda,
            Ini umumnya membawa pesan-pesan positif, semangat juang, dan pertarungan epik kepada penonton dan pembaca di seluruh dunia.'
        ]);

        Genre::create([
            'id' => 2,
            'title' => 'Drama',
            'descripsi' => 'Genre drama menyajikan cerita tentang kehidupan dengan situasi yang kompleks, emosional dan penuh konflik batin. Contoh anime pada genre ini adalah Tsuki Ga Kirei, Anohana: The Flower We Saw That Day, dan White Album.'
        ]);

        Genre::create([
            'id' => 3,
            'title' => 'School',
            'descripsi' => 'Anime genre ini mengambil setting dan latar belakang sekolah. Kisahnya pun mengangkat kehidupan di sekolah, misalnya, konflik antarsiswa atau siswa dengan gurunya. Contoh anime school of life adalah My Hero Academia, Kokoro Conect, juga Ansatsu Kyoushitsu.'
        ]);
    }
}
