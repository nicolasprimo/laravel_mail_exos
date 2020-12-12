<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects')->insert([
            [
            'name' => "Besoin de conseils",   
            ],
            [
            'name' => "Demande d'information supplémentaires",   
            ],
            [
            'name' => "Demande de devis",   
            ]
        ]);
    }
}
