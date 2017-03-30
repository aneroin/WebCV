<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Builder;
use App\Location;


class LocationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $opole = new Location([
            'text' => 'Poland, Opole',
            'coords' => '50.6751067,17.9212976'
        ]);
        $opole->save();

        $ternopil = new Location([
            'text' => 'Ukraine, Ternopil',
            'coords' => '49.553517,25.594767000000047'
        ]);
        $ternopil->save();
    }
}
