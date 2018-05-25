<?php

use App\Event;
use Illuminate\Database\Seeder;


class AddDummyEvent extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [

            ['title'=>'Rom Event', 'startDate'=>'2017-05-10', 'endDate'=>'2017-05-15'],

            ['title'=>'Coyala Event', 'startDate'=>'2017-05-11', 'endDate'=>'2017-05-16'],

            ['title'=>'Lara Event', 'startDate'=>'2017-05-16', 'endDate'=>'2017-05-22'],

        ];

        foreach ($data as $key => $value) {

            Event::create($value);

        }
    }
}
