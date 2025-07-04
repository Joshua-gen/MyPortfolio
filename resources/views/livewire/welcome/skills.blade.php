<div wire:poll class="flex flex-col items-center w-[80%]">
    <header class="w-full grid grid-cols-2 items-center gap-1 py-8 lg:grid-cols-3">
        <div class="flex lg:justify-center lg:col-start-2">
            <!-- Optional: Add logo or title here -->
        </div>
    </header>
    <div class="flex items-center w-full my-8">
        <hr class="flex-1 h-px bg-[#630436] border-0" />
        <span class="mx-4 text-3xl text-[#630436] font-extrabold">My skills</span>
        <hr class="flex-1 h-px bg-[#630436] border-0" />
    </div>     
      
      
    <div class="mt-10 mb-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 gap-4">
        @foreach ($skills as $skill)
            <div class="border rounded p-4 w-[300px] h-auto bg-white shadow">
                <div class="flex justify-between items-center">
                    <h2 class="text-xl font-semibold text-[#630436]">{{ $skill->name }}</h2>
                    
                    @if (!empty($skill->icon))
                        <span class="text-2xl">
                            {!! $skill->icon !!}
                        </span>
                    @endif
                </div>
                <p class="text-sm text-gray-700">{{ $skill->type }} | {{ $skill->stack }}</p>
                <p class="text-sm text-gray-600 mt-1">Proficiency: {{ $skill->proficiency }}</p>

                @if (!is_null($skill->experience_years) && $skill->experience_years !== '')
                    <p class="text-sm text-gray-500">Experience: {{ $skill->experience_years }} yrs</p>
                @endif

                @if (!empty($skill->description))
                    <p class="mt-2 text-gray-700 text-sm">{{ $skill->description }}</p>
                @endif
            </div>
        @endforeach
    </div>
</div>
