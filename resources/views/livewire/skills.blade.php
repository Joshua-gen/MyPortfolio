<div class="max-w-xl mx-auto mt-10 space-y-4">
    @if (session()->has('message'))
        <div class="bg-green-100 text-green-800 p-3 rounded">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="create" class="space-y-4">
        <div>
            <label class="block font-medium">Skill Name</label>
            <input type="text" wire:model="name" class="w-full border rounded px-3 py-2">
            @error('name') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Type -->
        <div>
            <label class="block font-medium">Type</label>
            <select wire:model="type" class="w-full border rounded px-3 py-2">
                <option value="">Select type</option>
                <option value="Language">Language</option>
                <option value="Framework">Framework</option>
                <option value="Library">Library</option>
                <option value="Tool">Tool</option>
                <option value="Database">Database</option>
            </select>
            @error('type') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Stack -->
        <div>
            <label class="block font-medium">Stack</label>
            <select wire:model="stack" class="w-full border rounded px-3 py-2">
                <option value="">Select stack</option>
                <option value="Frontend">Frontend</option>
                <option value="Backend">Backend</option>
                <option value="Fullstack">Fullstack</option>
            </select>
            @error('stack') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Proficiency -->
        <div>
            <label class="block font-medium">Proficiency</label>
            <select wire:model="proficiency" class="w-full border rounded px-3 py-2">
                <option value="">Select proficiency</option>
                <option value="Beginner">Beginner</option>
                <option value="Intermediate">Intermediate</option>
                <option value="Expert">Expert</option>
            </select>
            @error('proficiency') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block font-medium">Experience Years</label>
            <input type="number" wire:model="experience_years" class="w-full border rounded px-3 py-2">
            @error('experience_years') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block font-medium">Description</label>
            <textarea wire:model="description" class="w-full border rounded px-3 py-2"></textarea>
            @error('description') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="icon" class="block text-sm font-medium text-gray-700">
                Icon (optional SVG code or URL)
            </label>
        
            <input
                type="text"
                id="icon"
                wire:model="icon"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-[#630436] focus:border-[#630436] sm:text-sm"
                placeholder="<svg>...</svg> or /images/icon.svg"
            >
        
            @error('icon')
                <span class="text-sm text-red-600 mt-1">{{ $message }}</span>
            @enderror
        </div>
        

        <button type="submit" class="bg-[#630436] text-white py-2 px-4 rounded hover:bg-[#50032c]">
            Add Skill
        </button>
    </form>

    <div class="mt-8">
        <h2 class="text-xl font-bold mb-2">Skills List</h2>
        <ul class="space-y-1">
            @foreach ($skills as $skill)
                <li class="border p-2 rounded">{{ $skill->name }} — {{ $skill->type }} ({{ $skill->proficiency }})</li>
            @endforeach
        </ul>
    </div>
</div>
