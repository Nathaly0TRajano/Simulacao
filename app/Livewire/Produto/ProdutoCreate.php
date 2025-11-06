<?php

namespace App\Livewire\Produto;

use App\Models\Produto;
use Livewire\Component;

class ProdutoCreate extends Component
{
    public $nome;
    public $quantidade;
    public $preco;

    protected $rules = [
        'nome' => 'required',
        'quantidade' => 'required|integer',
        'preco' => 'required|decimal:10,2'
    ];

    protected $messages = [
        'nome.required' => 'O campo é necessário',
        'quantidade.required' => 'O campo é necessário',
        'quantidade.number' => 'O campo precisa ser um número',
        'preco.required' => 'O campo é necessário',
        'preco.decimal' => 'O campo precisa ser decimal'
    ];

    public function render()
    {
        return view('livewire.produto.produto-create');
    }

    public function store(){

        $this->validate();

        Produto::create([
            'nome' => $this->nome,
            'quantidade' => $this->quantidade,
            'preco' => $this->preco
        ]);

        session()->flash('success', 'Cadastrado com sucesso');
        return redirect()->route('dashboard');
    }
}
