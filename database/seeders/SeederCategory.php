<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SeederCategory extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = 
        [
            ['name'=>'telefonia'], 
            ['name'=>'elettrodomestici'], 
            ['name'=>'informatica'], 
            ['name'=>'accessori'], 
            ['name'=>'gaming'], 
            ['name'=>'musica'], 
        ];
        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'name'=>$category['name']
            ]);
        }
    }
}
