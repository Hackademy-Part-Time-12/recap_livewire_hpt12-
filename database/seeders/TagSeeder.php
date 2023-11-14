<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = ['#cucina', '#ricettefacili', '#ricettetradizionali', '#cucinaitaliana', '#piattiunici', '#gourmet', '#ricetteveloci', '#ricettefit'];

        foreach($tags as $tag){
            DB::table('tags')->insert([
                'name' => $tag,
            ]);
        }
    }
}
