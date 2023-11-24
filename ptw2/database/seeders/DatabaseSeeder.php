<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

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
        DB::table('users')->inser([
            'id' =>'1',
            'password' =>'123456789',
            'username' => 'Nguyen van a',
            'name' => 'vana',
            'phone' => '0919191919',
            'email' => 'vana@gmail.com',
        ]);
        DB::table('products')->insert([
            'name'=>"sanpham1",
            'image'=>"product-image-1.jpg",
            'price'=>"39000",
            'description'=>"San pham lam tu....",
            'material'=>"kim cuong",
            'size'=>"12",
        ]);
        DB::table('products')->insert([
            'name'=>"sanpham2",
            'image'=>"product-image-2.jpg",
            'price'=>"39000",
            'description'=>"San pham lam tu....",
            'material'=>"kim cuong",
            'size'=>"12",
        ]);
        DB::table('products')->insert([
            'name'=>"sanpham3",
            'image'=>"product-image-3.jpg",
            'price'=>"39000",
            'description'=>"San pham lam tu....",
            'material'=>"kim cuong",
            'size'=>"12",
        ]);
        DB::table('products')->insert([
            'name'=>"sanpham4",
            'image'=>"product-image-4.jpg",
            'price'=>"35000",
            'description'=>"San pham lam tu....",
            'material'=>"kim cuong",
            'size'=>"12",
        ]);
        DB::table('products')->insert([
            'name'=>"sanpham5",
            'image'=>"product-image-5.jpg",
            'price'=>"29000",
            'description'=>"San pham lam tu....",
            'material'=>"kim cuong",
            'size'=>"12",
        ]);
        DB::table('products')->insert([
            'name'=>"sanpham6",
            'image'=>"product-image-6.jpg",
            'price'=>"19000",
            'description'=>"San pham lam tu....",
            'material'=>"kim cuong",
            'size'=>"12",
        ]);
        DB::table('products')->insert([
            'name'=>"sanpham7",
            'image'=>"product-image-7.jpg",
            'price'=>"19000",
            'description'=>"San pham lam tu....",
            'material'=>"kim cuong",
            'size'=>"12",
        ]);
        DB::table('products')->insert([
            'name'=>"sanpham6",
            'image'=>"product-image-8.jpg",
            'price'=>"19000",
            'description'=>"San pham lam tu....",
            'material'=>"kim cuong",
            'size'=>"12",
        ]);
        DB::table('products')->insert([
            'name'=>"sanpham9",
            'image'=>"product-image-9.jpg",
            'price'=>"19000",
            'description'=>"San pham lam tu....",
            'material'=>"kim cuong",
            'size'=>"12",
        ]);
        DB::table('products')->insert([
            'name'=>"sanpham10",
            'image'=>"product-image-10.jpg",
            'price'=>"19000",
            'description'=>"San pham lam tu....",
            'material'=>"kim cuong",
            'size'=>"12",
        ]);
        DB::table('products')->insert([
            'name'=>"sanpham11",
            'image'=>"product-image-11.jpg",
            'price'=>"19000",
            'description'=>"San pham lam tu....",
            'material'=>"kim cuong",
            'size'=>"12",
        ]);
        DB::table('products')->insert([
            'name'=>"sanpham12",
            'image'=>"product-image-12.jpg",
            'price'=>"19000",
            'description'=>"San pham lam tu....",
            'material'=>"kim cuong",
            'size'=>"12",
        ]);
    }
}
