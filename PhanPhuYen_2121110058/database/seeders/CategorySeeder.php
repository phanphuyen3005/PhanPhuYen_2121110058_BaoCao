<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=1;$i<=10;$i++){
            Category::insert([
                'name' => 'Category '.$i,
                'image' => 'image.png',
                'slug' => 'slug',
                'sort_order' => 1,
                'parent_id' => 1,
                'metakey' => 'aaaaa',
                'metadesc' => 'vvvvv',
                'updated_by' => 1,
                'created_by' => 2,
                'created_at'=>now(),
            ]);
        }
    }
}
