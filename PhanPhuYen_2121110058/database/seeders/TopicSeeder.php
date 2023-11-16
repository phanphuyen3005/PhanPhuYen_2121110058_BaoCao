<?php

namespace Database\Seeders;

use App\Models\Topic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=1;$i<=10;$i++){
            Topic::insert([
                'slug' => 'slug 1',
                'name' => 'name'.$i,
                'parent_id' => 2,
                               
                'metakey' => 'metakey',                
                'metadesc' => 'metadesc 1',                
                'updated_by' => 1,
                'created_at'=>now(),
            ]);
        }
    }
}
