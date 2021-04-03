<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 50)->create();
        foreach (App\User::orderByDesc('created_at')->take(50)->get() as $user){
            $user->attachRole('user');
        }
    }
}

