<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categorias;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        Categorias::create([
            'Nome' => 'Materiais de Construção',
        ]);
        Categorias::create([
            'Nome' => 'Maquinas Eletricas',
        ]);
        Categorias::create([
            'Nome' => 'Materiais Hidraulicos',
        ]);
        Categorias::create([
            'Nome' => 'Ferramentas Manuais',
        ]);
        Categorias::create([
            'Nome' => 'Escadas',
        ]);

    }
}
