<?php

use Illuminate\Database\Seeder;

class order_products extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\order_products::class,12)->create();

    }
}
