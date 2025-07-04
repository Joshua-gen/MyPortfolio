<?php

namespace App\Livewire;

use App\Models\Skill;
use Livewire\Component;

class Skills extends Component
{
    public $name;
    public $type;
    public $stack;
    public $proficiency;
    public $experience_years;
    public $description;
    public $icon;

    public function create()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'stack' => 'nullable|string|max:255',
            'proficiency' => 'required|string|max:50',
            'experience_years' => 'nullable|numeric|min:0',
            'description' => 'nullable|string',
            'icon' => 'nullable|string',
        ]);

        Skill::create([
            'name' => $this->name,
            'type' => $this->type,
            'stack' => $this->stack,
            'proficiency' => $this->proficiency,
            'experience_years' => $this->experience_years,
            'description' => $this->description,
            'icon' => $this->icon,
        ]);

        // Optional: reset input fields
        $this->reset(['name', 'type', 'stack', 'proficiency', 'experience_years', 'description', 'icon']);

        // Optional: show success message
        session()->flash('message', 'Skill created successfully.');
    }

    public function render()
    {
        return view('livewire.skills', [
            'skills' => \App\Models\Skill::latest()->get(),
        ]);
    }
}
