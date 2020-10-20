<?php

use Illuminate\Database\Seeder;

class employees extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\employees::class,12)->create();
    }
}
