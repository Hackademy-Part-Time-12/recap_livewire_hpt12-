<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Recipe;
use App\Models\Tag;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class RecipeCreateForm extends Component
{
    use WithFileUploads;

    // #[Rule('required|min:3')]
    public $title;
    public $image;
    public $procedure;
    public $category_id;
    public $name_tag = [];

    protected $rules = [
        'title' => 'required|min:3|max:100',
        'image' => 'required|image|mimes:webp,png,jpeg,jpg', 
        'procedure' => 'required|min:10|max:10000',
    ];

    protected $messages = [
        'required' => 'Il campo non può essere vuoto',
        'min' => 'Devi inserire almeno :min caratteri',
        'max' => 'Devi inserire al massimo :max caratteri',
        'image' => 'Il file deve essere un\'immagine',
        'mimes' => 'Le estensioni accettate sono :values',
    ];

    public function store(){
        $this->validate();

        $recipe = Auth::user()->recipes()->create([
            'title' => $this->title,
            'procedure' => $this->procedure,
            'image' => $this->image->store('public/recipes'),
            'category_id' => $this->category_id,
            //'user_id' => Auth::user()->id,
        ]);
        $recipe->tags()->attach($this->name_tag);
        session()->flash('message', 'Ricetta inserita con successo');
        $this->reset();
    }

    public function render()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('livewire.recipe-create-form', compact('categories', 'tags'));
    }
}
