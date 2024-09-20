<?php

namespace App\Livewire;

use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactForm extends Component
{
    public $firstName;

    public $lastName;

    public $company;

    public $email;

    public $message;

    protected $rules = [
        'firstName' => 'required|string|max:255',
        'lastName' => 'required|string|max:255',
        'company' => 'nullable|string|max:255',
        'email' => 'required|email|max:255',
        'message' => 'required|string|max:500',
    ];

    public function submit()
    {
        $this->validate();

        Mail::to(config('mail.contact.address'))->send(new ContactFormMail(
            $this->firstName,
            $this->lastName,
            $this->company,
            $this->email,
            $this->message
        ));

        // Optionally reset the form fields
        $this->reset();
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
