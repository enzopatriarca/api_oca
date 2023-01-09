<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Produto;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        Produto::create([
            'categorias' => '1',
            'Nome' => 'Produto 1',
            'Descricao' => 'Essa é a descriçao do prouto',
            'preco' => '20.99',
            'src' => 'https://www.pngwing.com/en/search?q=tools'
        ]);

        Produto::create([
            'categorias' => '2',
            'Nome' => 'Produto 2',
            'Descricao' => 'Essa é a descriçao do prouto',
            'preco' => '20.99',
            'src' => 'https://www.pngwing.com/en/search?q=tools'
        ]);
        Produto::create([
            'categorias' => '3',
            'Nome' => 'Produto 3',
            'Descricao' => 'Essa é a descriçao do prouto',
            'preco' => '20.99',
            'src' => 'https://www.pngwing.com/en/search?q=tools'
        ]);
        Produto::create([
            'categorias' => '4',
            'Nome' => 'Produto 4',
            'Descricao' => 'Essa é a descriçao do prouto',
            'preco' => '20.99',
            'src' => 'https://www.pngwing.com/en/search?q=tools'
        ]);
        Produto::create([
            'categorias' => '5',
            'Nome' => 'Produto 5',
            'Descricao' => 'Essa é a descriçao do prouto',
            'preco' => '20.99',
            'src' => 'https://www.pngwing.com/en/search?q=tools'
        ]);
    }
}
