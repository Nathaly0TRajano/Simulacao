<?php

namespace App\Livewire\Produto;

use App\Models\Produto;
use Livewire\Component;

class ProdutoIndex extends Component
{
    public $search = '';

    public function render()
    {
        $prod = Produto::where('nome', 'like', '%'.$this->search.'%')->get();
        return view('livewire.produto.produto-index', compact('prod'));
    }

    public function deletar($id){
        $prod = Produto::find($id);

        if($prod){
        $prod->delete();
        session()->flash('success', 'deletado com sucesso');
        }
        
    }
}
