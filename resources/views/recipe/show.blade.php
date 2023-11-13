<x-layout>
    <div class="container my-5">
        <div class="row">
            <h2>{{ $recipe->title }}</h2>
        </div>
    </div>
    <div class="container my-5 shadow">
        <div class="row">
            <div class="col-12 col-md-6 p-0">
                <img src="{{Storage::url($recipe->image)}}" alt="{{ $recipe->title }}" class="img-fluid">
            </div>
            <div class="col-12 col-md-6 p-0">
                <p>Inserita da: {{$recipe->user->name}}</p>
                <p>Inserita: {{$recipe->created_at->translatedFormat('D, d/M/y')}}</p>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h4>Procedimento</h4>
                <p>{{$recipe->procedure}}</p>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <a href="{{route('recipe.index')}}">Torna alla lista</a>
            </div>
        </div>
    </div>
</x-layout>