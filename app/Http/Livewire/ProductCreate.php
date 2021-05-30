<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

use App\Product;

class ProductCreate extends Component
{
    use WithFileUploads;

    public $name;
    public $description;
    public $comment;
    public $image;

    public function render()
    {
        return view('livewire.product-create');
    }

    public function store()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'description' => 'required',
            'comment' => 'nullable',
            'image' => 'required|image',
        ]);

        $imagePath = $this->image->store('product', 'public');
        $validatedData['image_path'] = $imagePath;

        Product::create($validatedData);

        $this->emit('productAdded');
    }
}
