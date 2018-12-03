<?php

use Illuminate\Database\Seeder;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
        factory(App\User::class, 52)->create()->each(function ($u) {
            //$u->Cars()->save(factory(App\Car::class)->make());
        });
    }
}



