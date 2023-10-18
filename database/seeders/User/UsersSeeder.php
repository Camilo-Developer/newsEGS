<?php

namespace Database\Seeders\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=> 'Juan Camilo',
            'lastname'=> 'Developer',
            'username'=> 'camilo',
            'email'=>   'camilo@gmail.com',
            'password'=>  Hash::make('1234'),
            'gender'=> 'M',
            'document_number'=> '100',
            'document_type'=> 'CC',
            'avatar'=> '',
            'state_id'=> '1',
        ])->assignRole('Administrador');
    }
}
