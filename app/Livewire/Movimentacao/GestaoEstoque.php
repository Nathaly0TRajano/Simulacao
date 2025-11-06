<?php

namespace App\Livewire\Movimentacao;

use App\Models\Movimentacao;
use App\Models\Produto;
use Livewire\Component;

class GestaoEstoque extends Component
{
    public $tipo;
    public $quantidade;

    public function render()
    {
        return view('livewire.movimentacao.gestao-estoque');
    }

    public function movimentar($id)
    {
        $prod = Produto::find($id);

        if ($prod) {
            if ($this->tipo == 'entrada') {

                $prod->quantidade = $prod->quantidade + $this->quantidade;

                Movimentacao::create([
                    'tipo' => $this->tipo,
                    'quantidade' =>  $this->quantidade,
                    'data_modificacao' =>  now(),
                ]);
            }

            if($this->tipo == 'saida'){
                $prod->quantidade = $prod->quantidade - $this->quantidade;

                Movimentacao::create([
                    'tipo' => $this->tipo,
                    'quantidade' =>  $this->quantidade,
                    'data_modificacao' =>  now(),
                ]);
            }

            session()->flash('success', 'Movimentação concluída');
             return redirect()->route('prod.index');
        }
        
        session()->flash('error', 'Não foi possível encontrar o usuário');
        return redirect()->route('prod.index');
    }
}
