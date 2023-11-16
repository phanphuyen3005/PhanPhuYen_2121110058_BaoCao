<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=1;$i<=10;$i++){
            Order::insert([
                'name' => 'Menu '.$i,
                'user_id' => 1,
                'phone' => '113',
                'email' => 'email 1',
                'address' => 'address 1',
                'note' => 'address 1',                
                'updated_by' => 1,
                'created_at'=>now(),
            ]);
        }
    }
}
