<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class userSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //        Storage::fake('avatars');
        //
        //        $file = UploadedFile::fake()->image('avatar.jpg');
        //
        //        User::create([
        //            'first_name' => 'John',
        //            'last_name' => 'Doe',
        //            'email' => 'johndoe@test.com',
        //            'division' => 'IT',
        //            'password' => 'password',
        //            'signature' => $file,
        //        ]);
        //generate user using UserFactory
        $this->call(RoleSeeder::class);
        $users = User::factory()->count(20)->create();
        //assign role to user
        foreach ($users as $user) {
            $user->hasroles()->attach(random_int(1, 7));
        }
    }
}
