<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        User::factory()->count(88)->create();

        $user = User::find(1);
        $user->name = 'Taaakuu';
        $user->email = 'fujiwarachris324@gmail.com';
        $user->password = bcrypt('123123');
        $user->is_admin = true;
        $user->save();
    }
}
