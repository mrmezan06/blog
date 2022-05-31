<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Profile;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Akash Khan',
            'email' => 'akash@khan.me',
            'password' => bcrypt('12345678'),
            'admin' => 1,
        ]);

        Profile::create([
            'user_id' => $user->id,
            'avatar' => 'uploads/avatars/1.png',
            'about' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere reprehenderit provident, facilis accusantium explicabo obcaecati, consectetur amet quisquam porro assumenda, dolores fugit excepturi ullam ratione magnam officia iusto? Quidem, est?',
            'facebook' => 'facebook.com',
            'youtube' => 'youtube.com',
        ]);
    }
}
