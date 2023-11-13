<x-layout>
    <div class="container my-5">
        <div class="row">
            <h2>Tutte le ricette</h2>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            @forelse ($recipes as $recipe)
                <div class="col-12 col-md-3 my-3">
                    <x-card :recipe="$recipe" />
                </div>
            @empty
                <p>Non ci sono ricette. <a href="{{route('recipe.create')}}">Inseriscine una</a></p>
            @endforelse
            
        </div>
    </div>
</x-layout>