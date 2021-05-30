<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

use App\Company;

class CompanyCreate extends Component
{
    use WithFileUploads;

    public $name;
    public $address;
    public $phone;
    public $email;
    public $slogan;
    public $comment;
    public $logo;

    public function render()
    {
        return view('livewire.company-create');
    }

    public function store()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'slogan' => 'required',
            'comment' => 'nullable',
            'logo' => 'required|image',
        ]);

        $logoPath = $this->logo->store('company', 'public');
        $validatedData['logo_path'] = $logoPath;

        $company = Company::create($validatedData);
    }
}
