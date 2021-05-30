<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProductComponent extends Component
{
    public $createMode = false;

    protected $listeners = [
        'exitCreate' => 'exitCreateMode',
        'productAdded' => 'exitCreateMode',
    ];

    public function render()
    {
        return view('livewire.product-component');
    }

    public function enterCreateMode()
    {
        $this->createMode = true;
    }

    public function exitCreateMode()
    {
        $this->createMode = false;
    }
}
