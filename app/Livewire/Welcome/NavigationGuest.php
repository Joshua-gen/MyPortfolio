<?php

namespace App\Livewire\Welcome;

use Livewire\Component;

class NavigationGuest extends Component
{
    public function downloadCV()
    {
        if (!Storage::disk('public')->exists('Agena-CV.pdf')) {
            abort(404, 'CV not found.');
        }

        return Storage::disk('public')->download('Agena-CV.pdf', 'Joshua_Agena_CV.pdf');
    }

    public function render()
    {
        return view('livewire.welcome.navigation-guest');
    }
}
