<?php

namespace App\Livewire\Welcome;

use Livewire\Component;
use App\Models\Project;

class Projects extends Component
{
    public $projects;
    public $currentIndex = 0;

    public function mount()
    {
        $this->projects = Project::oldest()->get();
    }

    public function next()
    {
        if ($this->currentIndex < count($this->projects) - 1) {
            $this->currentIndex++;
        }
    }

    public function prev()
    {
        if ($this->currentIndex > 0) {
            $this->currentIndex--;
        }
    }

    public function goTo($index)
    {
        $this->currentIndex = $index;
    }


    public function render()
    {
        return view('livewire.welcome.projects');
    }
}



 