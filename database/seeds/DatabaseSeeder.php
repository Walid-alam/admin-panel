<?php
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $this->call(UsersTableSeeder::class);
        DB::table('users')->delete();
        User::create(array(
            'name'     => 'Chris Sevilleja',
            'email'    => 'chris@scotch.io',
            'password' => Hash::make('awesome'),
            'first_name' => 'Darth',
            'last_name'  => 'Vader',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ));
    }
}
