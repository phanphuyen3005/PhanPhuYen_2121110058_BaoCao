<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=2;$i<=10;$i++){
            Brand::insert([
                'name' => 'brand '.$i,
                'image' => 'image.png',
                'slug' => 'slug',
                'sort_order' => 1,
                'metakey' => 'aaaaa',
                'metadesc' => 'vvvvv',
                'updated_by' => 1,
                'created_by' => 2,
                'created_at'=>now(),
            ]);
        }
        
    }
}
