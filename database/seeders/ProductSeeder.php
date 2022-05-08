<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i<10; $i++ ){
            DB::table('products')->insert([
                'title' => 'Product nr.'.$i,
                'short_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',
                'ingredients' => ' It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum NRR'.$i,
                'price' => rand(100, 1000),

            ]);}
    }
}
