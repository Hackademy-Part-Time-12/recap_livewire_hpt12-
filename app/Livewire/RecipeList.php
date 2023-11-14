<?php

namespace App\Livewire;

use App\Models\Recipe;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class RecipeList extends Component
{
    public function destroy(Recipe $recipe){
        Storage::delete($recipe->image);
        $recipe->delete();
        session()->flash('message', 'Ricetta cancellata con successo');
    }

    public function render()
    {
        $recipes = Recipe::all();
        return view('livewire.recipe-list', compact('recipes'));
    }
}
