<?php

namespace Database\Seeders\State;

use App\Models\State\State;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        State::create([
            'name'=> 'Activo',
            'type_state'=> '1',
        ]);
        State::create([
            'name'=> 'No activo',
            'type_state'=> '2',
        ]);
        State::create([
            'name'=> 'Pendiente',
            'type_state'=> '3',
        ]);
    }
}
