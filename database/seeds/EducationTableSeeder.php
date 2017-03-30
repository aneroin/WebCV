<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Builder;
use App\Education;

class EducationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $as = new Education([
            'current' => false,
            'to_date' => date("Y-m-d", mktime(0, 0, 0, 0, 0, 2010)),
            'from_date' => date("Y-m-d", mktime(0, 0, 0, 0, 0, 2014)),
            'name' => 'Zboriv College',
            'degree' => 'AoS',
            'description' => 'I’ve started my education at `Zboriv College of Ternopil Ivan Puluj Technical University` as a `Programmer`, on completion get my diploma of `Associate of Science` with honours'
        ]);
        $as->save();

        $ba = new Education([
            'current' => false,
            'to_date' => date("Y-m-d", mktime(0, 0, 0, 0, 0, 2014)),
            'from_date' => date("Y-m-d", mktime(0, 0, 0, 0, 0, 2016)),
            'name' => 'TIPNTU',
            'degree' => 'Bachelor',
            'description' => 'Next step in my education was at `Ternopil Ivan Puluj National Technical University` where I’ve get my `Bachelor’s Degree` in `Software Engineering`, again, diploma with honour'
        ]);
        $ba->save();

        $ma = new Education([
            'current' => false,
            'to_date' => date("Y-m-d", mktime(0, 0, 0, 0, 0, 2016)),
            'from_date' => date("Y-m-d", mktime(0, 0, 0, 0, 0, 2017)),
            'name' => 'TIPNTU',
            'degree' => 'Master',
            'description' => 'Now I’m studying at `Ternopil Ivan Puluj National Technical University` on my `Master’s Degree`'
        ]);
        $ma->save();

        $er = new Education([
            'current' => true,
            'to_date' => date("Y-m-d", mktime(0, 0, 0, 0, 0, 2017)),
            'from_date' => date("Y-m-d", mktime(0, 0, 0, 0, 0, 2017)),
            'name' => 'PO',
            'degree' => 'Erasmus',
            'description' => 'And also I’m an ERASMUS student at the `Opole University of Technology`'
        ]);
        $er->save();


    }
}
