<div class="container mt-4">
    <div class="row">
            <div class="col">
                 <input class="form-control" placeholder="Pesquisar..." wire:model.live='search' />
            </div>
            <div class="col">
                 <a href="{{route('user.create')}}" class="btn btn-warning">Novo usuário</a>
            </div>
    </div>

    <div class="mt-3">
        <div class="card">
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>nome</th>
                            <th>email</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $u)
                            <tr>
                                <td>{{ $u->id }}</td>
                                <td>{{ $u->name }}</td>
                                <td>{{ $u->email }}</td>
                                <td>
                                    <a href="{{ route('user.edit', $u->id) }}" class="btn btn-sm btn-info">Editar</a>
                                    <button wire:click='delete({{ $u->id }})'
                                        class="btn btn-sm btn-danger">Deletar</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
