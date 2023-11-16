<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=1;$i<=10;$i++){
            User::insert([
                'name' => 'contact '.$i,
                'username' => 'username'.$i,
                'email' => 'email@gmail.com',
                'phone' => 1,
                'password' => '123456',
                'address' => 'address 1 ',
                'image' => 'image.png',
                'roles' => 'roles',
                'created_by' => 1,
                'updated_by' => 1,
                'created_at'=>now(),
            ]);
        }
    }
}
