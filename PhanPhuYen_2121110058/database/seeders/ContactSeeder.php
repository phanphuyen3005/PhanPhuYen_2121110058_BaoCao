<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=1;$i<=10;$i++){
            Contact::insert([
                'name' => 'contact '.$i,
                'user_id' => 1,
                'email' => 'email@gmail.com',
                'phone' => 1,
                'title' => 'title cate',
                'content' => 'contant ',
                'replay_id' => 1,
                'updated_by' => 1,
                'created_at'=>now(),
            ]);
        }
    }
}
