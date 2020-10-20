<?php

use Illuminate\Database\Seeder;

class offices extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\offices::class,12)->create();

    }
}
