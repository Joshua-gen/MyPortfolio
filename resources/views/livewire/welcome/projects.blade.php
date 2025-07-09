@php
    $projectsArray = $projects->map(fn ($p) => [
        'title' => $p->title,
        'project_type' => $p->project_type,
        'description' => $p->description,
        'technologies' => $p->technologies,
        'url' => $p->url,
        'image' => asset('storage/' . $p->image),
    ]);
@endphp

@php
$projects = collect([
    (object)[
        'title' => 'Mid-tier ERP',
        'description' => 'Enterprise Inventory and Sales Management System - Project features include Inventory, Sales management, Purchasing, Sales Releasing, Sales Report, Cash Flow.',
        'technologies' => 'Developed a Mid-tier ERP System using Laravel, Livewire, Alpine JS, Tailwind, PHP MySQL.',
        'project_type' => 'Client project (Freelance w/ my team)',
        'url' => 'https://digitalbusinessrun.com/',
        'image' => asset('image/projects/2.png'),
    ],
    (object)[
        'title' => 'Skool',
        'description' => 'Ride sharing mobile application for student - This app feature includes Matching and Booking, Real-time Map Tracking, Admin, Real-time Notification, User Profile and Verification.Ride sharing mobile application for student - This app feature includes Matching and Booking, Real-time Map Tracking, Admin, Real-time Notification, User Profile and Verification. Ride sharing mobile application for student - This app feature includes Matching and Booking, Real-time Map Tracking, Admin, Real-time Notification, User Profile and Verification.',
        'technologies' => 'Developed the main app using React Native Expo JS, React Native Libraries, Google Map Apis, Firebase and developed the web-base admin panel using, React, Express, Node, Nodemailer, MUI, Chart JS,',
        'project_type' => 'Capstone project',
        'url' => 'https://expo.dev/artifacts/eas/iPPPuowCi1tGxuffzafpjV.apk',
        'image' => asset('image/projects/1.png'),
    ],
    (object)[
        'title' => 'Mables POS',
        'description' => 'Mobile POS designed for Mables Restobar - the app features inclcude Inventory, Sales Order, Table Management.',
        'technologies' => 'Developed a mobile app using React Native JS, React Native Libraries, Firebase',
        'project_type' => 'School Project',
        'url' => '',
        'image' => asset('image/projects/6.png'),
    ],
    (object)[
        'title' => 'DevTeam HRIS',
        'description' => 'Human Resource Information System - the feature I developed as one of trainee developer inlcudes Notification Settings and Email Notification for Login and announcement Global Announcement with role-based access control.',
        'technologies' => 'Developed a Human Resource Information System using Laravel, Livewire, Alpine JS, Tailwind, PHP MySQL.',
        'project_type' => 'OJT (Intern’s Team Project)',
        'url' => '',
        'image' => asset('image/projects/7.png'),
    ],
    (object)[
        'title' => 'ToDo',
        'description' => 'To do list scheduling mobile app - the app feature Monitor day-to-day task.',
        'technologies' => 'Developed a mobile app using React Native JS, React Native Libraries, Firebase.',
        'project_type' => 'School Project',
        'url' => '',
        'image' => asset('image/projects/5.png'),
    ],
    (object)[
        'title' => 'Jobilee KM',
        'description' => 'Jobilee Koisk Machine a Fastfood Ordering System ',
        'technologies' => 'Developed a simple web-based system using HTML, Bootstrap, JQuery, PHP MySQL.',
        'project_type' => 'School Project',
        'url' => '',
        'image' => asset('image/projects/4.png'),
    ],
    (object)[
        'title' => 'Tenth Ecommerce',
        'description' => 'Personal project practicing TALL Stack - Project feature inlucdes Inventory, Shop listing and add to cart, User sides admin and user.',
        'technologies' => 'Developed a ecommerce web-based system using Laravel, Livewire, Alpine JS, Tailwind, PHP MySQL.',
        'project_type' => 'Personal Project',
        'url' => '',
        'image' => asset('image/projects/3.png'),
    ],
]);
$projectsArray = $projects->map(fn ($p) => [
    'title' => $p->title,
    'project_type' => $p->project_type,
    'description' => $p->description,
    'technologies' => $p->technologies,
    'url' => $p->url,
    'image' => $p->image,
]);
@endphp


<div 
    x-data="{
        projects: @js($projectsArray),
        currentIndex: 0,
        get current() {
            return this.projects[this.currentIndex];
        }
    }"
    class="flex flex-col mb-8 items-center w-[80%]"
>
    <header class="w-full grid grid-cols-2 items-center gap-2 py-8 lg:grid-cols-3">
        <div class="flex lg:justify-center lg:col-start-2">
            <!-- Optional: Add logo or title here -->
        </div>
    </header>

    <div class="flex items-center w-full my-8">
        <hr class="flex-1 h-px bg-[#630436] border-0" />
        <span class="mx-4 text-3xl text-[#630436] font-bold">Projects i have made</span>
        <hr class="flex-1 h-px bg-[#630436] border-0" />
    </div>

    <template x-if="projects.length">
        <div class="flex justify-center items-center w-full mt-5">
            <div class="w-[350px] md:w-[500px] h-auto rounded p-2 shadow-lg bg-white flex flex-col">
                <!-- Image -->
                <div class="w-full h-[200px] md:h-[250px] overflow-hidden rounded mb-4">
                    <img 
                        :src="current.image" 
                        class="w-full h-full object-cover rounded shadow" 
                    />
                </div>

                <!-- Info -->
                <div class="w-full px-3 flex flex-col">
                    <h2 class="text-xl text-[#630436] font-bold mb-1 truncate" x-text="current.title"></h2>
                    <p class="text-sm italic text-gray-600 mb-1">Type: <span x-text="current.project_type"></span></p>

                    <!-- Description toggle -->
                    <div x-data="{ expanded: false }" class="text-sm text-gray-800 mb-2">
                        <div class="transition-all duration-300">
                            <template x-if="expanded">
                                <span x-text="current.description"></span>
                            </template>
                            <template x-if="!expanded">
                                <span x-text="current.description.length > 200 ? current.description.slice(0, 200) + '...' : current.description"></span>
                            </template>
                        </div>
                        <template x-if="current.description.length > 200">
                            <div class="text-right mt-1">
                                <button 
                                    class="text-xs text-blue-600 underline"
                                    x-text="expanded ? 'See less' : 'See more'"
                                    @click="expanded = !expanded"
                                ></button>
                            </div>
                        </template>
                    </div>

                    <div class="text-sm mb-2 text-gray-700">
                        <strong>Tech:</strong> <span x-text="current.technologies"></span>
                    </div>

                    <template x-if="current.url">
                        <a :href="current.url" target="_blank" class="text-blue-700 text-sm underline mt-auto">
                            View Project
                        </a>
                    </template>
                </div>
            </div>
        </div>
    </template>

    <!-- Navigation -->
    <div class="flex justify-center mt-6 space-x-4">
        <button 
            class="bg-[#630436] text-white px-4 py-2 rounded disabled:opacity-50"
            @click="if (currentIndex > 0) currentIndex--"
            :disabled="currentIndex === 0"
        >← Prev</button>
        <button 
            class="bg-[#630436] text-white px-4 py-2 rounded disabled:opacity-50"
            @click="if (currentIndex < projects.length - 1) currentIndex++"
            :disabled="currentIndex === projects.length - 1"
        >Next →</button>
    </div>

    <!-- Small List -->
    <div class="w-full flex flex-col mt-6" x-show="projects.length">
        <h1 class="text-xl font-semibold text-[#630436]">List of my projects</h1>
        <div class="flex w-full gap-2 mt-2 flex-wrap">
            <template x-for="(project, index) in projects" :key="index">
                <div 
                    @click="currentIndex = index"
                    class="px-2 py-1 flex flex-col items-center gap-2 text-sm shadow rounded cursor-pointer transition-all duration-200"
                    :class="{
                        'bg-[#630436] text-white scale-105': index === currentIndex,
                        'bg-white text-black': index !== currentIndex
                    }"
                >
                    <span 
                        class="font-semibold text-center" 
                        :class="index === currentIndex ? 'text-sm' : 'text-xsm'" 
                        x-text="project.title"
                    ></span>
                    <img 
                        :src="project.image"
                        :class="index === currentIndex ? 'w-[70px] h-[70px]' : 'w-[60px] h-[60px]'"
                        class="rounded shadow object-cover transition-all duration-200" 
                    />
                </div>
            </template>
        </div>
    </div>

    <template x-if="!projects.length">
        <p class="text-center text-gray-500">No projects available.</p>
    </template>
</div>
