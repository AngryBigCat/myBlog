<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(User::class)->times(50)->make();
        User::insert($users->makeVisible('password')->toArray());

        $user = User::find(1);
        $user->name = 'Kenneth';
        $user->email = 'liuxikang1997@gmail.com';
        $user->is_admin = true;
        $user->activated = true;
        $user->password = bcrypt('123456');
        $user->save();
    }
}
