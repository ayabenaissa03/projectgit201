<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            ['name'=>'Laptop Pro', 'price'=>1299.99, /* ... */ ],
            ['name'=>'Souris Ergonomique', 'price' =>79.50 /* ... */ ]
        ]);
    }
}
