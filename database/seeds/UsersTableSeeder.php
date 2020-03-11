<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->insert([
        //     'name' => Str::random(8),
        //     'email' => Str::random(12) . '@gmail.com',
        //     'password' => Hash::make('password')
        // ]);

        factory(App\User::class, 50)->create();
    }
}
