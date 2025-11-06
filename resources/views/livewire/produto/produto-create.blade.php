<div class="container mt-4">
    @if(session('success'))
    <div class="alert alert-danger">{{$message}}</div>
    @endif
        <form wire:submit='store'>
            <div class="mb-3">
                <label for="exampleInput" class="form-label">Nome:</label>
                <input type="text" class="form-control" id="exampleInput" wire:model='nome'>
                @error('nome') <span class="text-danger">{{$message}}</span> @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Quantidade:</label>
                <input type="text" class="form-control" wire:model='quantidade'>
                @error('quantidade') <span class="text-danger">{{$message}}</span> @enderror
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Preço:</label>
                <input class="form-control" wire:model='preco'>
                @error('preco') <span class="text-danger">{{$message}}</span> @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
</div>
