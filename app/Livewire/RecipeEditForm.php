<?php

namespace App\Livewire;

use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class RecipeEditForm extends Component
{
    use WithFileUploads;

    public $recipe;
    public $title;
    public $image;
    public $procedure;
    public $category_id;
    public $old_image;

    public function update(){
        $this->recipe->update([
            'title' => $this->title,
            'procedure' => $this->procedure,
            'category_id' => $this->category_id,
        ]);

        if($this->image){
            Storage::delete($this->old_image);
            $this->recipe->update([
                'image' => $this->image->store('public/recipes'),
            ]);
        }
        $this->reset('image');
        session()->flash('message', 'Ricetta modificata con successo');
    }

    public function mount(){
        $this->title = $this->recipe->title;
        $this->procedure = $this->recipe->procedure;
        $this->category_id = $this->recipe->category_id;
        $this->old_image = $this->recipe->image;
    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.recipe-edit-form', compact('categories'));
    }
}
