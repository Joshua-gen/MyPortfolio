<?php

namespace App\Livewire;

use Livewire\Component;
use App\Mail\CustomMailer;

class Contacts extends Component
{
    public $name, $email, $subject, $message, $successMessage;

    protected $rules = [
        'name' => 'required|min:2',
        'email' => 'required|email',
        'subject' => 'required|min:3',
        'message' => 'required|min:5',
    ];

    public function send()
    {
        $this->validate();

        $mailer = new CustomMailer();
        $result = $mailer->sendContactMail(
            $this->name,
            $this->email,
            $this->subject,
            $this->message
        );

        if ($result === true) {
            $this->successMessage = "Thank you! Your message has been sent.";
            $this->reset(['name', 'email', 'subject', 'message']);
        } else {
            $this->addError('email', "Failed to send email: $result");
        }
    }

    public function render()
    {
        return view('livewire.contacts');
    }
}
