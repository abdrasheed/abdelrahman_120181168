<?php

use Illuminate\Database\Seeder;

class orders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\orders::class,12)->create();

    }
}
