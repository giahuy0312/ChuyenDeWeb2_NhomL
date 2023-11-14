<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('products')->insert([
            'name' => "SP1",
            'image' => "product-image-1.jpg",
            'price' => "10000",
            'description' => "sp1 là ...",
            'material' => "vàng",
            'size' => "13",
        ]);
        DB::table('products')->insert([
            'name' => "sp2",
            'image' => "product-image-2.jpg",
            'price' => "10000",
            'description' => "sp2 là ...",
            'material' => "vàng",
            'size' => "13",
        ]);
        DB::table('products')->insert([
            'name' => "sp3",
            'image' => "product-image-3.jpg",
            'price' => "10000",
            'description' => "sp3 là ...",
            'material' => "vàng",
            'size' => "13",
        ]);

        DB::table('orders')->insert([
            'order_date' => "2023-11-05",
            'order_status' => 1,
            'order_total' => 40000,
            'user_id' => 1,
        ]);
        DB::table('orders')->insert([
            'order_date' => "2023-11-05",
            'order_status' => 0,
            'order_total' => 60000,
            'user_id' => 1,
        ]);
        DB::table('orders')->insert([
            'order_date' => "2023-11-05",
            'order_status' => 0,
            'order_total' => 80000,
            'user_id' => 2,
        ]);

        DB::table('order_product')->insert([
            'product_id' => 1,
            'order_id' => 1,
            'quality' => 10,
            'unit_price' => 40000,
            'sub_total' => 40000,
        ]);
        DB::table('order_product')->insert([
            'product_id' => 2,
            'order_id' => 1,
            'quality' => 30,
            'unit_price' => 60000,
            'sub_total' => 60000,
        ]);
        DB::table('order_product')->insert([
            'product_id' => 3,
            'order_id' => 1,
            'quality' => 20,
            'unit_price' => 80000,
            'sub_total' => 80000,
        ]);
        DB::table('order_product')->insert([
            'product_id' => 2,
            'order_id' => 2,
            'quality' => 30,
            'unit_price' => 60000,
            'sub_total' => 60000,
        ]);
        DB::table('order_product')->insert([
            'product_id' => 1,
            'order_id' => 2,
            'quality' => 20,
            'unit_price' => 80000,
            'sub_total' => 80000,
        ]);

        DB::table('promotions')->insert([
            'name' => '123456',
            'start_date' => '2023-11-14',
            'end_date' => '2023-11-14',
            'amount' => 10000,
        ]);
    }
}
