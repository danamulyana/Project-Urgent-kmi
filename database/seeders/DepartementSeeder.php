<?php

namespace Database\Seeders;

use App\Models\mDepartement;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DepartementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        mDepartement::insert([
            [
                'txtnamadepartement' => 'PRD',
                'dtmcreatedat' => Carbon::now(),
                'dtmupdatedat' => Carbon::now(),
            ],
            [
                'txtnamadepartement' => 'BDA',
                'dtmcreatedat' => Carbon::now(),
                'dtmupdatedat' => Carbon::now(),
            ],
            [
                'txtnamadepartement' => 'IOS',
                'dtmcreatedat' => Carbon::now(),
                'dtmupdatedat' => Carbon::now(),
            ],
            [
                'txtnamadepartement' => 'ENG',
                'dtmcreatedat' => Carbon::now(),
                'dtmupdatedat' => Carbon::now(),
            ],
            [
                'txtnamadepartement' => 'QA',
                'dtmcreatedat' => Carbon::now(),
                'dtmupdatedat' => Carbon::now(),
            ],
            [
                'txtnamadepartement' => 'MDP',
                'dtmcreatedat' => Carbon::now(),
                'dtmupdatedat' => Carbon::now(),
            ],
            [
                'txtnamadepartement' => 'HC',
                'dtmcreatedat' => Carbon::now(),
                'dtmupdatedat' => Carbon::now(),
            ],
        ]);
    }
}
