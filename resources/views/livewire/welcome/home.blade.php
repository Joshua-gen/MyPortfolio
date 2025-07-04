<div class="flex flex-col lg:flex-row w-full min-h-screen px-4">
    <!-- Left Column -->
    <div class="w-full lg:w-1/2 flex flex-col items-center px-4 py-8">
        <div class="h-1/2 mt-0 lg:mt-32 items-center flex flex-col">
            <!-- Header Section -->
            <div class="mt-10 lg:mt-32 lg:text-left">
                <h1 class="text-4xl md:text-6xl lg:text-8xl font-bold">Joshua Agena</h1>
                <h1 class="text-xl md:text-2xl lg:text-3xl font-medium mt-2">Fullstack Developer</h1>
            </div>

            <!-- Contact Button -->
            <a href="#contact">
                <button type="button"
                    class="mt-8 py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-[#630436] focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                    Contact me
                </button>
            </a>
        </div>
         
    
        <!-- About Me Section at the bottom -->
        <div class="mt-10 w-full lg:w-3/4 px-4">
            <h1 class="text-2xl md:text-3xl font-bold mb-4">About Me</h1>
            <p class="text-base leading-relaxed">
                I'm an entry-level Full Stack Developer with a strong passion for creating efficient and user-friendly web applications. I enjoy working on both front-end and back-end development, solving problems through clean, maintainable code.
            </p>
            <p class="text-base leading-relaxed mt-4">
                Driven by curiosity and a desire to keep learning, I’m always exploring better ways to build and improve digital experiences.
            </p>
        </div>
    </div>

    <!-- Right Column (Image) -->
    <div class="w-full lg:w-1/2 px-2 py-2">
        <img src="{{ asset('image/cartoon.png') }}" alt="My Photo" class="w-full h-auto rounded-lg object-cover">
    </div>
</div>
