<form class="shadow p-5" wire:submit.prevent="update">
@csrf
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="title" class="form-control" id="title" wire:model="title">
        @error('title')
            <p class="text-danger">{{$message}}</p>
        @enderror
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Categoria</label>
        <select id="" class="form-select" wire:model="category_id">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{$category->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="">Immagine attuale</label>
        <img src="{{Storage::url($recipe->image)}}" alt="{{$recipe->title}}" class="img-fluid">
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Immagine</label>
        <input type="file" class="form-control" id="image" wire:model="image">
        @error('image')
            <p class="text-danger">{{$message}}</p>
        @enderror
    </div>
    @if($image)
        <div class="mb-3">
            <label for="">Preview immagine</label>
            <img src="{{$image->temporaryUrl()}}" alt="" class="img-fluid">
        </div>
    @endif
    <div class="mb-3">
        <label for="procedure" class="form-label">Procedimento</label>
        <textarea class="form-control" id="procedure" wire:model="procedure" cols="30" rows="5"></textarea>
        @error('procedure')
            <p class="text-danger">{{$message}}</p>
        @enderror
    </div>
    <button type="submit" class="btn btn-custom">Modifica ricetta</button>
</form>