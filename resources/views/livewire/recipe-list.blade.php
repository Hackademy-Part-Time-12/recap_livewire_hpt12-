<div>
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Titolo</th>
                <th scope="col">Categoria</th>
                <th scope="col">Inserita il</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        @foreach (Auth::user()->recipes as $recipe)
            <tbody>
                <tr>
                    <th scope="row">{{$recipe->id}}</th>
                    <td>{{$recipe->title}}</td>
                    <td>{{ $recipe->category->name ?? '-' }}</td>
                    <td>{{$recipe->created_at->translatedFormat('d/m/y')}}</td>
                    <td>
                        <a href="{{route('recipe.show', $recipe)}}" class="btn btn-primary">Mostra</a>
                        <a href="{{route('recipe.edit', $recipe)}}" class="btn btn-warning">Modifica</a>
                        <a wire:click="destroy({{$recipe}})" class="btn btn-danger">Elimina</a>
                    </td>
                </tr>
                <tr>
            </tbody>
        @endforeach
    </table>
</div>
