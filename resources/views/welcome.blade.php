<x-layout>
    <div class="container my-5">
        <div class="row">
            <div class="col-12 d-flex justify-content-between">
                <h2 class="display-5">Le ultime ricette caricate</h2>
                <a href="{{route('recipe.index')}}" class="mt-3 text-custom">Vai alla lista</a>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-evenly">
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