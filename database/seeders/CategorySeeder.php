<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Antipasti', 'Primi', 'Secondi', 'Contorni', 'Dolci', 'Lievitati',
        ];

        foreach($categories as $category){
            DB::table('categories')->insert([
                'name' => $category,
                'created_at' => Carbon::now(),
            ]);
        }
    }
}
