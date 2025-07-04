<?php

namespace App\Livewire\Welcome;

use Livewire\Component;
use App\Models\Skill;

class Skills extends Component
{
    public $skills;

    public function mount()
    {
        $this->skills = Skill::oldest()->get();
    }


    public function render()
    {
        return view('livewire.welcome.skills');
    }
}
