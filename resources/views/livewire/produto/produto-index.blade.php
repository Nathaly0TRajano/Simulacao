<div class="container mt-4">

    @if (session()->has('success'))
        <div class="alert alert-success">{{ $message }}</div>
    @endif

    <div class="row">
        <div class="col">
            <input class="round col-md-5" wire:model.live='search' type="text">
        </div>
        <div class="col">
            <a href="{{ route('prod.create') }}" class="btn btn-warning">Novo produto</a>
        </div>
    </div>

    <div class="card mt-2">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>nome</th>
                        <th>quantidade</th>
                        <th>preco</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($prod as $p)
                        <tr>
                            <td>{{ $p->id }}</td>
                            <td>{{ $p->nome }}</td>
                            <td>{{ $p->quantidade }}</td>
                            <td>{{ $p->preco }}</td>
                            <td>
                                <a class="btn btn-warning" href="{{ route('prod.edit', $p->id) }}">Editar</a>
                                <button class="btn btn-danger"
                                    wire:click='deletar({{ $p->id }})'>Deletar</button>
                                <a href="{{ route('movimentar', $p->id) }}" class="btn btn-info">Movimentar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
