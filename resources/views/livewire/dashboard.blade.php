<div class="">

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Moda Espress</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('dashboard') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.index') }}">Usuários</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-disabled="true" href="{{ route('prod.index') }}">Produtos</a>
                    </li>
                    <li>
                        <div class=" justify-content-end">
                            <button wire:click='logout' class="btn btn-danger text-white">
                                Sair
                            </button>
                        </div>

                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="col">
        @if ($user)
            <h4>Oi, {{ $user->name }}</h4>
        @else
            <h4>Olá</h4>
        @endif
    </div>
</div>
