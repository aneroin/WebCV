<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('PersonTableSeeder');
        $this->call('LocationTableSeeder');
        $this->call('PhoneTableSeeder');
        $this->call('MailTableSeeder');
        $this->call('EducationTableSeeder');
    }
}
