<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=1;$i<=10;$i++){
            Product::insert([
                'category_id' => 1,
                'name' => 'name'.$i,
                'brand_id' => 2,
                'slug' => 'slug 1',
                'image' => 'image 1',                
                'price' => 123,                
                'price_sale' => 123,                
                'qty' => 12,                
                'detail' => 'detail',                
                'metakey' => 'metakey',                
                'metadesc' => 'metadesc 1',                
                'updated_by' => 1,
                'created_at'=>now(),
            ]);
        }
    }
}
