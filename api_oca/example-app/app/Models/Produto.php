<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    public function Categorias(){
        return $this->belongsTo(Categorias::class);
    }
    public function pedidos(){
        return $this->belongsTo(Pedidos::class);
    }

}
