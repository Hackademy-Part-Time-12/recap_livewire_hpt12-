<div class="card">
    <img src="{{ Storage::url($recipe->image) }}" class="card-img-top" alt="{{ $recipe->title }}">
    <div class="card-body">
        <h5 class="card-title">{{ $recipe->title }}</h5>
        <a href="{{route('recipe.show', $recipe)}}" class="btn btn-custom">Leggi</a>
    </div>
    <div class="card-footer">
        <p class="card-text">{{$recipe->created_at->diffForHumans()}}</p>
    </div>
</div>