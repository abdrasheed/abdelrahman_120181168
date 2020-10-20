<?php

use Illuminate\Database\Seeder;

class payments extends Seeder
{

    public function run() {
        factory(\App\payments::class,12)->create();
    }
}
