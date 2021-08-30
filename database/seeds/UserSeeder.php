<?php

use Illuminate\Database\Seeder;
use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'puskamelayu@uinjambi.ac.id',
            'password'=> bcrypt('admin123456'),
            'role'=>1
        ]);
    }
}
