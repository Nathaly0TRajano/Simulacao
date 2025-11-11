<div class="container mt-3">
    <div class="card">
        <div class="card-body">
            <form wire:submit.prevent='store'>
                <div class="mb-2">
                    <label for="">Nome:</label>
                    <input class="form-control" type="text" aria-label="input example"
                        wire:model='name'>
                </div>
                <div class="mb-2">
                    <label for="">Email:</label>
                    <input class="form-control" type="text"  aria-label="input example"
                        wire:model='email'>
                </div>
                <div class="mb-2">
                    <label for="">Senha:</label>
                    <input class="form-control" type="password"  aria-label="input example"
                        wire:model='password'>
                </div>

                <div class="mt-2"><button class="btn btn-success" type="submit">Cadastrar</button></div>
            </form>
        </div>
    </div>
</div>
