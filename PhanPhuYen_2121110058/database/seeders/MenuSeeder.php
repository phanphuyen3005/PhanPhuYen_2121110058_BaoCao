<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=1;$i<=10;$i++){
            Menu::insert([
                'name' => 'Menu '.$i,
                'link' => 'link123.com',
                'table_id' => 1,
                'type' => 'type 1',
                
                'created_by' => 1,
                'updated_by' => 1,
                'created_at'=>now(),
            ]);
        }
    }
}
