<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ContatoModel;

class ContatoSeeder extends Seeder
{

    public function run(): void
    {
        ContatoModel::factory()->count('100')->create();
    }
}
