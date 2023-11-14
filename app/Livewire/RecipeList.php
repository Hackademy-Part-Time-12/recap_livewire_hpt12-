<?php

namespace App\Livewire;

use App\Models\Recipe;
use Livewire\Component;

class RecipeList extends Component
{
    public function render()
    {
        $recipes = Recipe::all();
        return view('livewire.recipe-list', compact('recipes'));
    }
}
