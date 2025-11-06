<div class="container mt-4">
    @if (session('success'))
        <div class="alert alert-danger">{{ $message }}</div>
    @endif
    <form wire:submit='movimentar'>
        <select class="form-select" aria-label="Default select example" wire:model='tipo'>
            <option selected>Escolha um tipo de modificação</option>
            <option value="entrada">Entrada</option>
            <option value="saida">Saída</option>
        </select>
        @error('tipo')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Quantidade</label>
            <input type="text" class="form-control" wire:model='quantidade'>
            @error('quantidade')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
