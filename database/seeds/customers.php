<?php

use Illuminate\Database\Seeder;

class customers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\customers::class,12)->create();

    }
}
