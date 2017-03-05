<?php

use App\User;
use Illuminate\Database\Seeder;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        User::create(array(
            'name'     => 'Chris Sevilleja',
            'username' => 'sevilayha',
            'email'    => 'chris@scotch.io',
            'password' => Hash::make('awesome'),
            'first_name' => 'Darth',
            'last_name'  => 'Vader',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ));

//        DB::table('users')->insert([
//            'username'   => 'goodsidesoldier',
//            'email'      => 'lightwalker@rebels.com',
//            'password'   => Hash::make('hesnotmydad'),
//            'first_name' => 'Luke',
//            'last_name'  => 'Skywalker',
//            'created_at' => new DateTime(),
//            'updated_at' => new DateTime()
//        ]);
//
//        DB::table('users')->insert([
//            'username'   => 'greendemon',
//            'email'      => 'dancingsmallman@rebels.com',
//            'password'   => Hash::make('yodaIam'),
//            'first_name' => 'Yoda',
//            'last_name'  => 'Unknown',
//            'created_at' => new DateTime(),
//            'updated_at' => new DateTime()
//        ]);
    }

}