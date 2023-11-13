<x-layout>
    <div class="container my-5">
        <div class="row">
            <h2>Accedi</h2>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-6">
            <form action="{{route('login')}}" method="POST" class="shadow p-5">
                @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}">
                        @error('email')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                        @error('password')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-custom">Accedi</button>
                    <span class="ms-3">Non sei registrato? <a class="text-custom small" href="{{route('register')}}">Registrati</a></span>
                </form>
            </div>
        </div>
    </div>
</x-layout>