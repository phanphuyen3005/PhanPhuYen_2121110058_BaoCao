<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=1;$i<=10;$i++){
            Slider::insert([
                'link' => 'link',
                'name' => 'name'.$i,
                'sort_order' => 2,
                'position' => 'position 1',
                           
                'updated_by' => 1,
                'created_at'=>now(),
            ]);
        }
    }
}
