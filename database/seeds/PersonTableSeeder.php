<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Builder;
use App\Person;

class PersonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $me = new Person([
            'firstname' => 'Andrii',
            'surname' => 'Pavlenko',
            'profession' => 'Software Engineer',
            'birthday' => date("Y-m-d", mktime(0, 0, 0, 8, 22, 1994)),
            'photo' => 'photo.png'
        ]);
        $me->save();
    }
}
