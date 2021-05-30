<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\ContactMessage;

class ContactMessageCreate extends Component
{
    public $sender_name;
    public $sender_email;
    public $sender_phone;
    public $message;

    public function render()
    {
        return view('livewire.contact-message-create');
    }

    public function store()
    {
        $messageSaved = false;

        $validatedData = $this->validate([
            'sender_name' => 'required',
            'sender_email' => 'required|email',
            'sender_phone' => 'required',
            'message' => 'required',
        ]);

        $validatedData['status'] = 'new';

        if (ContactMessage::create($validatedData)) {
            $messageSaved = true;
        }

        $this->resetInputFields();

        if ($messageSaved) {
            session()->flash('message', 'Your message is received. We will get back to you.');
        } else {
            session()->flash('message', 'Some issue. Sorry.');
        }
    }

    public function resetInputFields()
    {
        $this->sender_name = "";
        $this->sender_email = "";
        $this->sender_phone = "";
        $this->message = "";
    }
}
