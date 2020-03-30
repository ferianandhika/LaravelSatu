<?php

use Illuminate\Database\Seeder;

class daftarMhsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($i = 1; $i <= 120; $i++){
            // $kelas = ;
            DB::table('daftar_mhs')->insert([
                'nama' => $faker->name,
                'kelas' => $faker->randomElement(['6A','6B','6C','6D'])
            ]);
        }
    }
}
