<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    use HasFactory;
    protected $filename = ['Nome'];

    public function Produtos(){
        return $this->hasMany(Produto::class);
    }
}
