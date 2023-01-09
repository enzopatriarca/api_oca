<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        User::create([
            'nome' => 'Alexandre Torchelsen Feldens',
            'name' => 'afeldens',
            'password' => bcrypt('afeldens'),
            'email' =>'afeldens@itaipu.gov.br',
        ])->assignRole('User');

        User::create([
            'nome' => 'Aluizio Henrique Bezagio',
            'name' => 'aluizio',
            'password' => bcrypt('aluizio'),
            'email' =>'aluizio@itaipu.gov.br',
        ])->assignRole('User');

        User::create([
            'nome' => 'Diego Franco Martins',
            'name' => 'diegofm',
            'password' => bcrypt('diegofm'),
            'email' =>'diegofm@itaipu.gov.br',
        ])->assignRole('User');

        User::create([
            'nome' => 'Enzo Patriarca',
            'name' => 'Enzo_login',
            'password' => bcrypt('enzo'),
            'email' =>'enzo@gmail.com',
        ])->assignRole('Admin');
    }
}
