<?php

namespace App\Livewire\Produto;

use App\Models\Produto;
use Livewire\Component;

class ProdutoEdit extends Component
{
    public $nome;
    public $quantidade;
    public $preco;
    public $prodId;


    public function render()
    {
        return view('livewire.produto.produto-edit');
    }

    public function mount($id)
    {
        $prod = Produto::find($id);
        $this->prodId = $prod->id;

        if ($prod) {
            $this->nome = $prod->nome;
            $this->quantidade = $prod->quantidade;
            $this->preco = $prod->preco;
        }
    }

    public function update()
    {
        $prod = Produto::find($this->prodId);

        $prod->nome = $this->nome;
        $prod->quantidade = $this->quantidade;
        $prod->preco = $this->preco;

        $prod->update();
    }
}
