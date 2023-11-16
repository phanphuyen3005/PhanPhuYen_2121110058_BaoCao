<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=1;$i<=10;$i++){
            Post::insert([
                'topic_id' => 1,
                'title' => 'title post'.$i,
                'slug' => 'slug 1',
                'detail' => 'detail 1',
                'image' => 'image 1',                
                'type' => 'address 1',                
                'metakey' => 'metakey 1',                
                'metadesc' => 'metadesc 1',                
                'updated_by' => 1,
                'created_at'=>now(),
            ]);
        }
    }
}
