<?php

namespace App\Livewire\Movimentacao;

use App\Models\Movimentacao;
use App\Models\Produto;
use Livewire\Component;

class GestaoEstoque extends Component
{
    public $tipo;
    public $idProduto;
    public $quantidade;

    public function mount($id)
    {
        $this->idProduto = $id;
    }

    public function render()
    {
        return view('livewire.movimentacao.gestao-estoque');
    }

    public function movimentar()
    {
        $prod = Produto::find($this->idProduto);

        if ($prod) {
            if ($this->tipo == 'entrada') {

                $prod->quantidade = $prod->quantidade + $this->quantidade;

                Movimentacao::create([
                    'produto_id' => $this->idProduto,
                    'tipo' => $this->tipo,
                    'quantidade' =>  $this->quantidade,
                    'data_modificacao' =>  now(),
                ]);


                $prod->save();
            }

            if ($this->tipo == 'saida') {
                $prod->quantidade = $prod->quantidade - $this->quantidade;

                Movimentacao::create([
                    'produto_id' => $this->idProduto,
                    'tipo' => $this->tipo,
                    'quantidade' =>  $this->quantidade,
                    'data_modificacao' =>  now(),
                ]);

                $prod->save();
            }

            session()->flash('success', 'Movimentação concluída');
            return redirect()->route('prod.index');
        }

        session()->flash('error', 'Não foi possível encontrar o usuário');
        return redirect()->route('prod.index');
    }
}
