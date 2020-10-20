<?php

use Illuminate\Database\Seeder;

class product_lines extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\product_lines::class,12)->create();
    }
}
