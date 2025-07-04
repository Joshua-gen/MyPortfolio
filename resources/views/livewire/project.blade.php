<div wire:poll>
    <div class="max-w-xl mx-auto p-4">
        @if (session()->has('message'))
            <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
                {{ session('message') }}
            </div>
        @endif
    
        <form wire:submit.prevent="create" enctype="multipart/form-data" class="space-y-4">
            <div>
                <label class="block font-semibold">Title</label>
                <input type="text" wire:model="title" class="w-full border rounded p-2" />
                @error('title') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
            <div>
                <label class="block font-semibold">Project Type</label>
                <input type="text" wire:model="project_type" class="w-full border rounded p-2" />
                @error('project_type') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
    
            <div>
                <label class="block font-semibold">Description</label>
                <textarea wire:model="description" class="w-full border rounded p-2"></textarea>
                @error('description') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
    
            <div>
                <label class="block font-semibold">Technologies</label>
                <input type="text" wire:model="technologies" class="w-full border rounded p-2" />
                @error('technologies') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
    
            <div>
                <label class="block font-semibold">Project URL</label>
                <input type="text" wire:model="url" class="w-full border rounded p-2" />
                @error('url') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
    
            <div>
                <label class="block font-semibold">Project Image</label>
                <input type="file" wire:model="image" accept="image/*"  class="w-full" />
                @error('image') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
            @if ($image)
    <p class="mt-2 text-sm text-green-600">Image ready for upload: {{ $image->getClientOriginalName() }}</p>
    <img src="{{ $image->temporaryUrl() }}" class="w-32 h-auto mt-2 rounded" />
@endif

    
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Create Project</button>
        </form>
    
        <div class="mt-10 space-y-4">
            <h2 class="text-xl font-bold">Project List</h2>
            @foreach ($projects as $project)
                <div class="border p-4 rounded shadow">
                    <h3 class="text-lg font-semibold">{{ $project->title }}</h3>
                    <p>{{ $project->description }}</p>
                    <p class="text-sm text-gray-600">Tech: {{ $project->technologies }}</p>
                    @if ($project->image)
                        <img src="{{ asset('storage/' . $project->image) }}" class="w-32 mt-2 rounded" />
                    @endif
                    @if ($project->url)
                        <p><a href="{{ $project->url }}" class="text-blue-500 underline" target="_blank">Visit</a></p>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
    
</div>
