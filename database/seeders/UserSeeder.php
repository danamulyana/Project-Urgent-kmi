<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'intiddepartement' => 6,
            'intlevel' => 1,
            'txtnik' => '123314',
            'txtusername' => 'danamulyana',
            'txtfullname' => 'Dana Mulyana',
            'txtemail' => 'ngoding.danamulyana@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
