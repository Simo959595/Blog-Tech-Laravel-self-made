<div>

    {{-- titolo --}}
    <h1>VETRINA VIRTUALE DEI NOSTRI PRODOTTI</h1>

    {{-- inizio form --}}
    <form class="w-50 mx-auto border border-dark rounded p-3" wire:submit = 'productCreate'>
        <div class="mb-3">
            <label class="form-label">Nome del prodotto</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" wire:model.blur='name'>
        </div>

        <div class="mb-3">
            <label class="form-label" for="category">Seleziona la categoria</label>
            <select class="form-select" wire:model="category_id" id="category">
                @foreach ($categories as $category)
                    <option class="dropdown-item" value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label" for="supplier">Seleziona i fornitori</label>
            <select class="form-select" wire:model="supplier_id" multiple id="supplier">
                @foreach ($suppliers as $supplier)
                    <option class="dropdown-item" value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Marca</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" wire:model.blur='type'>
        </div>
        <div class="mb-3">
            <label class="form-label">Prezzo di €</label>
            <input type="number" class="form-control" aria-describedby="emailHelp" wire:model.blur='price'>
        </div>
        <div class="mb-3">
            <label class="form-label">Anno di produzione</label>
            <input type="number" class="form-control" aria-describedby="emailHelp" wire:model.blur='year'>
        </div>

        {{-- tasto --}}
        <button type="submit" class="btn btn-primary">Aggiungi prodotto!</button>
    </form>
    {{-- fine form --}}

</div>
