<x-layout titolo="Crea Categoria">
    <div class="row">
        <div class="col-lg-6 mx-auto">

            <a href="{{ route('categories.index') }}" class="btn btn-sm btn-secondary">Indietro</a>

            <h1>Crea Categoria</h1>

            <x-alert_success/>

            <div class="mt-5">
                <form action="{{ route('categories.store') }}" method="POST">
                    @csrf

                    <div class="row g-3">
                        <div class="col-12">
                            <label for="name">Nome</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
                            @error('name') <span class="small text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Crea</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>