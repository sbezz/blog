<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Model::unguard();

       factory('App\User')->create(
           [
            'name' => 'sergio',
            'email' => 'bezz.sergio@gmail.com',
            'password' => bcrypt(123456),
            'remember_token' => str_random(10),
            ]);

        DB::statement('SET foreign_key_checks = 0;');

        $this->call('PostsTableSeeder');
        $this->call('TagTableSeeder');
        //$this->call('TagTableSeeder');

        DB::statement('SET foreign_key_checks = 1;');
        Model::reguard();
    }
}
