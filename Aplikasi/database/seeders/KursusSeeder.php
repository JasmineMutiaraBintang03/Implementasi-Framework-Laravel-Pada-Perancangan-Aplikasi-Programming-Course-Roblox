<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProgramStudi;
use DateTime;

class KursusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create ProgramStudi
        ProgramStudi::create([
            'id_kursus' => 'KRS001',
            'nama_kursus' => 'PUZZLE GAME',
            'jenjang_kursus' => 'Program 1',
            'foto_kursus' => 'foto kursus/kursus1672487749-puzzle.jpg',
            'pengajar' => 'Daffa Audya Pramana',
            'jam' => '08.00 - 10.00 WIB',
            'hari' => 'Selasa',
            'harga_kursus'=> 'Rp.60.000',
            'contoh_game'=> 'https://www.roblox.com/games/9696171676/Guess-The-Picture',
            'materi_kursus' => 'perkenalan game',
            'created_at' => now()
        ]);

        ProgramStudi::create([
            'id_kursus' => 'KRS002',
            'nama_kursus' => 'FIGHTING GAME',
            'jenjang_kursus' => 'Program 2',
            'foto_kursus' => 'foto kursus/kursus1672488285-fighting.jpg',
            'pengajar' => 'Daffa Audya Pramana',
            'jam' => '09.00 - 12.00 WIB',
            'hari' => 'Rabu',
            'harga_kursus'=> 'Rp.50.000',
            'contoh_game'=> 'https://www.roblox.com/games/12209778293/Fighting-Game',
            'materi_kursus' => 'perkenalan game',
            'created_at' => now()
        ]);
        ProgramStudi::create([
            'id_kursus' => 'KRS003',
            'nama_kursus' => 'SPORT GAME',
            'jenjang_kursus' => 'Program 3',
            'foto_kursus' => 'foto kursus/kursus1672488306-sport.jpg',
            'pengajar' => 'Daffa Audya Pramana',
            'jam' => '09.00 - 13.00 WIB',
            'hari' => 'Jumat',
            'harga_kursus'=> 'Rp. 40.000',
            'contoh_game'=> 'https://www.roblox.com/games/11744310885/My-Obby-Sports',
            'materi_kursus' => 'perkenalan game',
            'created_at' => now()
        ]);

        ProgramStudi::create([
            'id_kursus' => 'KRS004',
            'nama_kursus' => 'EDUCATION GAME',
            'jenjang_kursus' => 'Program 4',
            'foto_kursus' => 'foto kursus/kursus1672488321-education.jpg',
            'pengajar' => 'Daffa Audya Pramana',
            'jam' => '12.00 - 14.00 WIB',
            'hari' => 'Kamis',
            'harga_kursus'=> 'Rp.30.000',
            'contoh_game'=> 'https://www.roblox.com/games/12093321567/Find-The-Button',
            'materi_kursus' => 'perkenalan game',
            'created_at' => now()
        ]);

    }
}
