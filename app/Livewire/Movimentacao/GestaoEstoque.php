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
    public $data_modificacao;

    protected $rules = [
        'idProduto' => 'required|exists:produtos,id',
        'tipo' => 'required|in:entrada,saida',
        'quantidade_movimentada' => 'required|integer|min:1',
        'data_movimentacao' => 'required|date'
    ];

    protected $messages = [
        'idProduto.required' => 'Este campo é necessário',
        'tipo.required' => 'Este campo é necessário',
        'quantidade_movimentada.required' => 'Este campo é necessário',
        'quantidade_movimentada.integer' => 'O valor precisa ser um número'
    ];

    public function mount($id)
    {
        $this->idProduto = $id;
        $this->data_modificacao = now()->format('Y-m-d');

        // $this->produtos = Produto::orderBy('nome')->get();
        // $this->data_modificacao = now()->format('Y-m-d');
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

                 //dd($this->data_modificacao);

                Movimentacao::create([
                    'produto_id' => $this->idProduto,
                    'tipo' => $this->tipo,
                    'quantidade' =>  $this->quantidade,
                    'data_movimentacao' => $this->data_modificacao,
                ]);

                $prod->save();
            }

            if ($this->tipo == 'saida') {
                $prod->quantidade = $prod->quantidade - $this->quantidade;

                Movimentacao::create([
                    'produto_id' => $this->idProduto,
                    'tipo' => $this->tipo,
                    'quantidade' =>  $this->quantidade,
                    'data_modificacao' => $this->data_modificacao,
                ]);

                $prod->save();
            }

            session()->flash('message', 'Movimentação concluída');
            return redirect()->route('prod.index');
        }

        session()->flash('message', 'Não foi possível encontrar o usuário');
        return redirect()->route('prod.index');
    }
}
