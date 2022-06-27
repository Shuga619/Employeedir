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
        DB::table('users')->insert([
            'name' => 'Directory Administrator',
            'email' => 'taphin@bnb.bt',
            'password' => bcrypt('D1rect0ry@2oi9'),
        ]);
        DB::table('users')->insert([
            'name' => 'Directory Administrator2',
            'email' => 'damber@bnb.bt',
            'password' => bcrypt('D1rect0ry@2oi9'),
        ]);
        DB::table('users')->insert([
            'name' => 'Lhaki Delma',
            'email' => 'lhaki@bnb.bt',
            'password' => bcrypt('Lhaki@2020'),
        ]);
    }
}
