<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Testing users
        DB::table('users')->insert([
            'name' => 'First User',
            'email' => 'first.user@gmail.com',
            'password' => Hash::make('password1')
        ]);

        $id = DB::table('users')->insertGetId([
            'name' => 'Second User',
            'email' => 'second.user@gmail.com',
            'password' => Hash::make('password2')
        ]);

        // Create 5 posts with user_id = second user's id
        factory(App\Post::class, 5)->create(['user_id' => $id]);
    }
}
