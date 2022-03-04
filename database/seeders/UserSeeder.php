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
            [
                'intiddepartement' => 6,
                'intlevel' => 1,
                'txtnik' => '123314',
                'txtusername' => 'danamulyana',
                'txtfullname' => 'Dana Mulyana',
                'txtemail' => 'ngoding.danamulyana@gmail.com',
                'password' => bcrypt('12345678'),
            ],
            // buyer
            [
                'intiddepartement' => 6,
                'intlevel' => 2,
                'txtnik' => '2356568',
                'txtusername' => 'buyer',
                'txtfullname' => 'Buyer',
                'txtemail' => 'buyer@gmail.com',
                'password' => bcrypt('12345678'),
            ],
            // head
            [
                'intiddepartement' => 6,
                'intlevel' => 3,
                'txtnik' => '1234567',
                'txtusername' => 'headmdp',
                'txtfullname' => 'headmdp',
                'txtemail' => 'headmdp@gmail.com',
                'password' => bcrypt('12345678'),
            ],
            [
                'intiddepartement' => 3,
                'intlevel' => 3,
                'txtnik' => '7897986',
                'txtusername' => 'headios',
                'txtfullname' => 'headios',
                'txtemail' => 'headios@gmail.com',
                'password' => bcrypt('12345678'),
            ],
            // SPV
            [
                'intiddepartement' => 3,
                'intlevel' => 4,
                'txtnik' => '546644',
                'txtusername' => 'spv',
                'txtfullname' => 'spv',
                'txtemail' => 'spv@gmail.com',
                'password' => bcrypt('12345678'),
            ],
            // user lain
            [
                'intiddepartement' => 3,
                'intlevel' => 5,
                'txtnik' => '345354',
                'txtusername' => 'user1',
                'txtfullname' => 'user ios',
                'txtemail' => 'ios.user@gmail.com',
                'password' => bcrypt('12345678'),
            ],
            [
                'intiddepartement' => 4,
                'intlevel' => 5,
                'txtnik' => '23131',
                'txtusername' => 'user2',
                'txtfullname' => 'user enginering',
                'txtemail' => 'eng.user@gmail.com',
                'password' => bcrypt('12345678'),
            ],
        ]);
    }
}
