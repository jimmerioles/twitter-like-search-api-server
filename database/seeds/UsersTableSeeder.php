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
        factory(App\User::class)->create(['name' => 'Jim Merioles', 'email' => 'jimmerioles@gmail.com']);

        factory(App\User::class, 100)
            ->create()
            ->each(function ($u) {
                $u->statuses()->saveMany(factory(App\Status::class, rand(1, 20))->make());
            });
    }
}
