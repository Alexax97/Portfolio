<x-layout titolo='Accedi'>

    <div class="row">
        <div class="col-lg-6 mx-auto">
            <h1>Accedi</h1>
            <p class="lead text-secondary">Utilizza questo Form per accedere</p>

        <form action="/login" method="POST">
        @csrf 
        <div class="row g-3">
            <div class="col-12">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control">
                @error('email') <span class="small text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-12">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control">
                @error('password') <span class="small text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Accedi</button>
            </div>
        </div>
    </form>
        </div>
    </div>

</x-layout>