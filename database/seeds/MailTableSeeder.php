<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Builder;
use App\Mail;


class MailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $work_gmail = new Mail([
            'address' => 'dev.pavlenko@gmail.com'
        ]);
        $work_gmail->save();
    }
}
