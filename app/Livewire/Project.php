<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Project as ProjectModel;

class Project extends Component
{
    use WithFileUploads;

    public $title;
    public $description;
    public $project_type;
    public $technologies;
    public $url;
    public $image;

    public function create()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'project_type' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'technologies' => 'required|string|max:255',
            'url' => 'nullable|url',
            'image' => 'required|image|max:2048', // max 2MB
        ]);

        if (!$this->image) {
            session()->flash('message', 'No image selected.');
            return;
        }
    
        $imagePath = $this->image->store('projects', 'public');

        ProjectModel::create([
            'title' => $this->title,
            'project_type' => $this->project_type,
            'description' => $this->description,
            'technologies' => $this->technologies,
            'url' => $this->url,
            'image' => $imagePath,
        ]);

        $this->reset(['title', 'project_type', 'description', 'technologies', 'url', 'image']);
        session()->flash('message', 'Project created successfully.');
    }

    public function render()
    {
        return view('livewire.project',[
            'projects' => ProjectModel::latest()->get(),
        ]);
    }
}
