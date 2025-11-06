<div class="container mt-4">
    @if(session('success'))
    <div class="alert alert-danger">{{$message}}</div>
    @endif
        <form wire:submit='update'>
            <div class="mb-3">
                <label for="exampleInput" class="form-label">Nome:</label>
                <input type="text" class="form-control" id="exampleInput" wire:model='nome'>

            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Quantidade</label>
                <input type="text" class="form-control" wire:model='quantidade'>
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Preco</label>
                <input class="form-control" wire:model='preco'>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
</div>

