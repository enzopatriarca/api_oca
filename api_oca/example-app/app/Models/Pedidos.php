<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model{
    use HasFactory;
    protected $fillable = [
        'user',
        'preco_total',
        'status',
    ];
    public function Produtos(){
        return $this->hasMany(Produto::class);
    }
    public function User(){
        return $this->belongsTo(User::class);
    }
}
