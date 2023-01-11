<?php

namespace Database\Seeders;

use App\Models\Soal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // BHS INDO

        Soal::create([
            'mapel_id' => '1',
            'pertanyaan' => 'Kegiatan percobaan atau eksperimen di kelas atau laboratorium termasuk dalam kegiatan...',
            'a' => 'sosial',
            'b' => 'alamiah',
            'c' => 'ilmiah',
            'd' => 'natural',
            'jawaban' => 'c',
        ]);
        Soal::create([
            'mapel_id' => '1',
            'pertanyaan' => 'Pernyataan berikut yang termasuk kalimat aktif intransitif adalah...',
            'a' => 'Riko tertidur di rumah Rayhan',
            'b' => 'Adi menendang bola dengan kakinya',
            'c' => 'Rina membaca majalah Panjebar Semangat',
            'd' => 'Dina makan nasi goreng buatan ibunya',
            'jawaban' => 'b',
        ]);
        Soal::create([
            'mapel_id' => '1',
            'pertanyaan' => 'Mari kita [...] sampah di tempat sampah agar kota kita terbebas dari masalah banjir!Kata tepat untuk melengkapi kalimat persuasif tersebut adalah...',
            'a' => 'membuang',
            'b' => 'membakar',
            'c' => 'mengubur',
            'd' => 'menyimpan',
            'jawaban' => 'a',
        ]);
        Soal::create([
            'mapel_id' => '1',
            'pertanyaan' => 'Dalam berpidato, isi harus mencakup tema yang ditentukan karena...',
            'a' => 'Pendengar lebih mudah memahami',
            'b' => 'Agar tidak susah',
            'c' => 'Mengefisiensikan waktu',
            'd' => 'Perpengaruh dengan kondisi',
            'jawaban' => 'c',
        ]);
        Soal::create([
            'mapel_id' => '1',
            'pertanyaan' => 'Kalimat pembuka pidato di bawah, yang tepat adalah...',
            'a' => 'Pada kesempatan ini, saya yakin kalian sering makan makanan berpengawet',
            'b' => 'Pada kesempatan ini, saya akan bertanya tentang makanan berpengawet',
            'c' => 'Pada kesempatan ini, saya akan menjelaskan bahaya makanan berpengawet',
            'd' => 'Pada kesempatan ini, saya bermaksud mendata bahaya makanan berpengawet',
            'jawaban' => 'c',
        ]);
        Soal::create([
            'mapel_id' => '1',
            'pertanyaan' => 'Struktur teks laporan percobaan yang membahas langkah atau prosedur kerja dalam pengumpulan data percobaan adalah...',
            'a' => 'objek',
            'b' => 'bahan dan alat',
            'c' => 'tujuan',
            'd' => 'cara/langkah kerja',
            'jawaban' => 'd',
        ]);
        Soal::create([
            'mapel_id' => '1',
            'pertanyaan' => 'Definisi cerita pendek adalah ...',
            'a' => 'Sebuah cerita yang selesai dibaca dalam sekali duduk',
            'b' => 'Cerita yang tidak memiliki tokoh',
            'c' => 'Sebuah kisah nyata yang kemudian difilmkan',
            'd' => 'Sebuah cerita yang terdiri dari 5 paragraf',
            'jawaban' => 'a',
        ]);
        Soal::create([
            'mapel_id' => '1',
            'pertanyaan' => 'Struktur teks cerpen terdiri dari...',
            'a' => 'Orientasi, komplikasi, dan resolusi',
            'b' => 'Orientasi, observasi, dan analisis',
            'c' => 'Komplikasi, resolusi, dan sanitasi',
            'd' => 'Resolusi, komplikasi, dan marinasi',
            'jawaban' => 'a',
        ]);
        Soal::create([
            'mapel_id' => '1',
            'pertanyaan' => 'Dalam struktur teks cerpen terdapat orientasi yang memiliki arti',
            'a' => 'Merupakan tahap pengenalan cerita, tokoh, dan latar cerita',
            'b' => 'Merupakan tahap munculnya permasalahan',
            'c' => 'Merupakan tahap penyelesaian masalah',
            'd' => 'Semua salah',
            'jawaban' => 'a',
        ]);
        Soal::create([
            'mapel_id' => '1',
            'pertanyaan' => 'Tema, tokoh, watak, latar, dan amanat termasuk ke dalam bagian',
            'a' => 'Unsur-unsur teks cerpen',
            'b' => 'Ciri-ciri teks cerpen',
            'c' => 'Struktur teks cerpen',
            'd' => 'Pengertian teks cerpen',
            'jawaban' => 'a',
        ]);

        // BHS ENG

        Soal::create([
            'mapel_id' => '2',
            'pertanyaan' => 'An example of an expression of a prohibition is...',
            'a' => 'Never give up !',
            'b' => 'No one believes it ',
            'c' => 'Do it now',
            'd' => "Don't sleep too late",
            'jawaban' => 'a',
        ]);
        Soal::create([
            'mapel_id' => '2',
            'pertanyaan' => 'The correct sentence is ...',
            'a' => 'should must go now',
            'b' => 'I am not must go now',
            'c' => 'I ought not go now',
            'd' => 'I must go now',
            'jawaban' => 'd',
        ]);
        Soal::create([
            'mapel_id' => '2',
            'pertanyaan' => "It's not obligatory to wear a tie. You .... wear one if you don't want to",
            'a' => "don't have to",
            'b' => "mustn't",
            'c' => "shouldn't",
            'd' => 'have to',
            'jawaban' => 'a',
        ]);
        Soal::create([
            'mapel_id' => '2',
            'pertanyaan' => 'Expression of imperative The following options are imperatives, except ',
            'a' => 'Sit down !',
            'b' => 'Sure, go ahead !',
            'c' => "Sorry, I'm using it",
            'd' => "Don't eat that food ",
            'jawaban' => 'd',
        ]);
        Soal::create([
            'mapel_id' => '2',
            'pertanyaan' => 'Jono ……… his kite now. He is at school.',
            'a' => "Isn’t flying",
            'b' => "Doesn’t playing",
            'c' => "Doesn’t fly",
            'd' => "Don’t fly",
            'jawaban' => 'b',
        ]);
        Soal::create([
            'mapel_id' => '2',
            'pertanyaan' => 'The children are … by the river.',
            'a' => 'fished',
            'b' => 'Fish',
            'c' => 'Fishing',
            'd' => 'Fishes',
            'jawaban' => 'c',
        ]);
        Soal::create([
            'mapel_id' => '2',
            'pertanyaan' => 'I am not...video games right now',
            'a' => 'Playing',
            'b' => 'Plays',
            'c' => 'Is playing',
            'd' => "Don’t play",
            'jawaban' => 'a',
        ]);
        Soal::create([
            'mapel_id' => '2',
            'pertanyaan' => 'Amir and Udin … discussing the material now.',
            'a' => 'Is',
            'b' => 'Are',
            'c' => 'Was',
            'd' => 'Were',
            'jawaban' => 'b',
        ]);
        Soal::create([
            'mapel_id' => '2',
            'pertanyaan' => "Listen! She’s……..a beautiful song",
            'a' => 'sing',
            'b' => 'Singing',
            'c' => 'To sing',
            'd' => 'Sings',
            'jawaban' => 'd',
        ]);
        Soal::create([
            'mapel_id' => '2',
            'pertanyaan' => '...listening to me right now?',
            'a' => 'Do you',
            'b' => 'Are you',
            'c' => 'Did you',
            'd' => 'Were you',
            'jawaban' => 'b',
        ]);

        // MTK

        Soal::create([
            'mapel_id' => '3',
            'pertanyaan' => 'Pak Sikin mempunyai kebun berbentuk persegi yang panjang sisinya 4 √5 m. Luas kebun Pak Sikin adalah … m2',
            'a' => '16 √5',
            'b' => '64 √5',
            'c' => '80',
            'd' => '100',
            'jawaban' => 'c',
        ]);
        Soal::create([
            'mapel_id' => '3',
            'pertanyaan' => 'Suatu bakteri setiap jam berkembang biak dengan cara membelah diri.  Jumlah bakteri tersebut setelah berkembang biak dalam kurun waktu 4 jam adalah ...',
            'a' => '8',
            'b' => '15',
            'c' => '16',
            'd' => '31',
            'jawaban' => 'd',
        ]);
        Soal::create([
            'mapel_id' => '3',
            'pertanyaan' => 'Ita mempunyai persediaan tali yang panjangnya √75 m, karena pitanya kurang maka Ita membeli lagi pita sepanjang 3√48 . Pita yang dimiliki kIta sekarang adalah...',
            'a' => '17√3',
            'b' => '12√6',
            'c' => '17√6',
            'd' => '12√3',
            'jawaban' => 'c',
        ]);
        Soal::create([
            'mapel_id' => '3',
            'pertanyaan' => 'Nilai diskriminan dari persamaan kuadrat 2x2 – 3x – 4 = 0 adalah...',
            'a' => '-41',
            'b' => '20',
            'c' => '41',
            'd' => '49',
            'jawaban' => 'd',
        ]);
        Soal::create([
            'mapel_id' => '3',
            'pertanyaan' => 'Akar – akar persamaan kuadrat   x2 – 13x+ 42 = 0 adalah...',
            'a' => 'Real dan berbeda',
            'b' => 'Real dan sama',
            'c' => 'Tidak real',
            'd' => 'Tidak dapat ditentukan',
            'jawaban' => 'a',
        ]);
        Soal::create([
            'mapel_id' => '3',
            'pertanyaan' => 'Tyas ingin merasionalkan bilangan 2√6  dirasionalkan penyebutnya menjadi',
            'a' => '√6',
            'b' => '1/6 √12',
            'c' => '1/3 √6',
            'd' => '2√6',
            'jawaban' => 'a',
        ]);
        Soal::create([
            'mapel_id' => '3',
            'pertanyaan' => 'Akar – akar persamaan kuadrat x2 – 13x + 42 = 0 adalah',
            'a' => 'Real dan berbeda',
            'b' => 'Real dan sama',
            'c' => 'Tidak real',
            'd' => 'Tidak dapat ditentukan',
            'jawaban' => 'a',
        ]);
        Soal::create([
            'mapel_id' => '3',
            'pertanyaan' => 'Hasil dari 8³ x 4⁻⁵ / 16⁻¹ adalah...',
            'a' => '1/8',
            'b' => '1/4',
            'c' => '4',
            'd' => '8',
            'jawaban' => 'b',
        ]);
        Soal::create([
            'mapel_id' => '3',
            'pertanyaan' => 'Hasil dari 5√6 x 2√3 - 4√50 adalah',
            'a' => '20√2',
            'b' => '10√2',
            'c' => '6√2',
            'd' => '5√2',
            'jawaban' => 'a',
        ]);
        Soal::create([
            'mapel_id' => '3',
            'pertanyaan' => 'Diketahui dua bilangan a dan b. Jika a + b = 9 dan a² + b² = 53, nilai 3ab adalah...',
            'a' => '26',
            'b' => '28',
            'c' => '39',
            'd' => '42',
            'jawaban' => 'b',
        ]);
    }
}
