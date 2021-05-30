<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

use App\Company;

class CompanyUpdate extends Component
{
    use WithFileUploads;

    public $company = null;

    public $name;
    public $address;
    public $phone;
    public $email;
    public $slogan;
    public $comment;
    public $logo = null;

    public function render()
    {
        $this->name = $this->company->name;
        $this->address = $this->company->address;
        $this->phone = $this->company->phone;
        $this->email = $this->company->email;
        $this->slogan = $this->company->slogan;
        $this->comment = $this->company->comment;

        return view('livewire.company-update');
    }

    public function update()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'slogan' => 'required',
            'comment' => 'nullable',
            'logo' => 'nullable|image',
        ]);

        if ($this->logo !== null) {
            $logoPath = $this->logo->store('company', 'public');
            $validatedData['logo_path'] = $logoPath;
        }

        $this->company->update($validatedData);

        $this->emit('companyUpdated');
    }
}
