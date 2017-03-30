<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Builder;
use App\Phone;


class PhoneTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kyivstar = new Phone([
            'number' => '+380976505049'
        ]);
        $kyivstar->save();

        $play = new Phone([
            'number' => '+48889796212'
        ]);
        $play->save();
    }
}
