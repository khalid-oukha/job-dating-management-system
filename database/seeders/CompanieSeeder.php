<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Companie;
class CompanieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('companies')->insert([
        //     'name' => Str::random(10),
        //     'title' => Str::random(60),
        //     'founded_at' => now(),
        //     'address' =>  Str::random(20),
        //     'description' => Str::random(100),
        // ]);
        
        Companie::factory(10)->create();

    }
}
