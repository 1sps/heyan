<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Company;

class CompanyComponent extends Component
{
    public $createMode = false;
    public $updateMode = false;

    public $company = null;

    protected $listeners = [
        'exitCreate' => 'exitCreateMode',
        'exitUpdate' => 'exitUpdateMode',
        'companyUpdated' => 'exitUpdateMode',
    ];

    public function render()
    {
        if (Company::count() > 0) {
            $this->company = Company::firstOrFail();
        }

        return view('livewire.company-component');
    }

    public function enterCreateMode()
    {
        $this->createMode = true;
    }

    public function exitCreateMode()
    {
        $this->createMode = false;
    }

    public function enterUpdateMode()
    {
        $this->updateMode = true;
    }

    public function exitUpdateMode()
    {
        $this->updateMode = false;
    }
}
