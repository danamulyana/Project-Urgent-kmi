<?php

namespace Database\Seeders;

use App\Models\mLevel;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        mLevel::insert([
            [
                'txtnamalevel' => 'Admin',
                'dtmcreatedat' => Carbon::now(),
                'dtmupdatedat' => Carbon::now(),
            ],
            [
                'txtnamalevel' => 'Buyer',
                'dtmcreatedat' => Carbon::now(),
                'dtmupdatedat' => Carbon::now(),
            ],
            [
                'txtnamalevel' => 'Head',
                'dtmcreatedat' => Carbon::now(),
                'dtmupdatedat' => Carbon::now(),
            ],
            [
                'txtnamalevel' => 'SPV',
                'dtmcreatedat' => Carbon::now(),
                'dtmupdatedat' => Carbon::now(),
            ],
            [
                'txtnamalevel' => 'User',
                'dtmcreatedat' => Carbon::now(),
                'dtmupdatedat' => Carbon::now(),
            ],
        ]);
    }
}
