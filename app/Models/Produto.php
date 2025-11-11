<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'quantidade',
        'preco',
        'quantidade_minima',
        'descricao'
    ];

    public function movimentacoes(){
        return $this->HasMany(Movimentacao::class, 'produto_id');
    }
}
