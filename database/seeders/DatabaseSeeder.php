<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Antrian;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name'      => 'Admin',
            'email'     => 'admin@gmail.com',
            'password'  => bcrypt('12345'),
            'level'     => 'admin'
        ]);

        User::create([
            'name'      => 'Auliya',
            'email'     => 'aul@gmail.com',
            'password'  => bcrypt('12345'),
            'level'     => 'pengunjung'
        ]);
        
        User::create([
            'name'      => 'Operator Karantina',
            'email'     => 'opk@gmail.com',
            'password'  => bcrypt('12345'),
            'level'     => 'opk'
        ]);

        Antrian::create([
            'no_antrian' => 'U1',
            'tanggal_antrian' => '2023-01-31',
            'user_id' => 2,
            'no_ppk' => '33741298720001',
            'jenis_layanan' => 'karantina'
        ]);

        // User::create([
        //     'name' => 'Auliya Putri',
        //     'email' => 'auliyaputri@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        
        // Operator::create([
        //     'name' => 'Operator Karantina',
        //     'jenislayanan_id' => 1,
        //     'email' => 'opkarantina@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // Operator::create([
        //     'name' => 'Operator Mutu',
        //     'jenislayanan_id' => 2,
        //     'email' => 'opmutu@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // Operator::create([
        //     'name' => 'Operator PNBP',
        //     'jenislayanan_id' => 3,
        //     'email' => 'oppnbp@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // Operator::create([
        //     'name' => 'Operator TPF',
        //     'jenislayanan_id' => 4,
        //     'email' => 'optpf@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // JenisLayanan::create([
        //     'name' => 'Operator Karantina',
        // ]);
        // JenisLayanan::create([
        //     'name' => 'Operator Mutu',
        // ]);
        // JenisLayanan::create([
        //     'name' => 'Operator PNBP',
        // ]);
        // JenisLayanan::create([
        //     'name' => 'Operator TPF',
        // ]);
        // JenisLayanan::create([
        //     'name' => 'Layanan Konsultasi',
        // ]);

        // Antrian::create([
        //     'waktu_antrian' => '',
        //     'jenis_layanan' => 'Karantina'
        // ]);
    }
}
