@php use App\Models\WorkExperience;use Illuminate\Support\Carbon; @endphp
@extends('layouts.app')

@section('content')
    <!-- Home Section -->
    <div class="relative mx-auto min-h-screen bg-cover bg-center bg-no-repeat flex flex-col justify-center items-center gap-4 px-4"
         style="background-image: url('{{asset('bg.jpg')}}');" id="home">
        <div class="flex-grow flex flex-col justify-evenly items-center gap-4">
            <div class="flex flex-col gap-6">
                <h1 class="font-extrabold text-5xl text-center text-slate-300">
                    Andrew Cade
                </h1>
                <h2 class="font-bold text-3xl text-center text-slate-300">
                    Software Engineer
                </h2>
            </div>

            <div class="flex flex-row mx-auto justify-center gap-12 items-center pointer-events-auto">
                <a class="hover:text-slate-300 hover:font-bold text-2xl" href="#about">About</a>
                <a class="hover:text-slate-300 hover:font-bold text-2xl" href="#skills">Skills</a>
                <a class="hover:text-slate-300 hover:font-bold text-2xl" href="#experience">Experience</a>
                <a class="hover:text-slate-300 hover:font-bold text-2xl" href="#projects">Projects</a>
            </div>
            <div class="flex flex-row mx-auto justify-center gap-12 items-center pointer-events-auto">
                <a href="https://github.com/lsvMoretti" class="hover:text-slate-200"><i
                            class="fa-brands fa-github text-5xl"></i></a>
                <a href="https://medium.com/@andrew_cade" class="hover:text-slate-200"><i
                            class="fa-brands fa-medium text-5xl"></i></a>
                <a href="https://x.com/unsociable_dev" class="hover:text-slate-200"><i
                            class="fa-brands fa-x-twitter text-5xl"></i></a>
                <a href="https://www.upwork.com/freelancers/~017448aa08bd5fd772" class="hover:text-slate-200">
                    <i class="fa-brands fa-upwork text-5xl"></i>
                </a>
            </div>
        </div>
        <!-- Down Arrow -->
        <div class="w-full flex flex-col gap-12 justify-center items-center">
            <a class="pointer-events-auto hover:opacity-80 hover:cursor-pointer" href="#about">
                <i class="fa-solid fa-arrow-down text-4xl animate-bounce" style="color: #ffffff;"></i>
            </a>
        </div>
    </div>
    <!-- About Section -->
    <x-home-section :div-id="'about'" :up-button="'#home'" :down-button="'#skills'" class="from-black to-cyan-900">
        <div class="flex flex-col-reverse md:flex-row items-center gap-6">
            <!-- Text Section -->
            <div class="flex-1 flex flex-col justify-center items-start gap-6">
                <div class="relative w-full">
                    <p class="font-extrabold text-3xl inline-block pb-2">
                        Hi! <span class="text-slate-300">I'm Andrew</span>
                    </p>
                    <div class="absolute bottom-0 left-0 w-full h-1 bg-cyan-500"></div>
                </div>
                <div class="space-y-4">
                    @php
                        $date = Carbon::createMidnightDate(1992, 10, 1);
                        $ageYears = floor($date->diffInYears());
                    @endphp
                    <p>
                        Thank you for visiting my page! I’m currently {{$ageYears}} years old, based in the UK, and
                        working
                        as a Software Engineer at <a href="https://iasme.co.uk/"
                                                     class="hover:cursor-pointer hover:underline text-slate-300 font-bold hover:text-sky-400">
                            The IASME Consortium Limited
                        </a>.
                    </p>
                    <p>
                        My journey into software engineering began in February 2023. Prior to that, I worked in my
                        family business, specializing in the repair of Air and Ground Source Heat Pumps, Water
                        Chillers, and contributing to the design and development of custom HVAC BMS systems across
                        the UK. However, transitioning into software was a long-time aspiration of mine.
                    </p>
                </div>
            </div>
            <!-- Photo Section -->
            <div class="flex-none">
                <img src="{{asset('me.jpeg')}}" alt="Andrew Cade"
                     class="rounded-full w-32 h-32 object-cover mx-auto">
            </div>
        </div>
    </x-home-section>
    <!-- Skills section -->
    <x-home-section :div-id="'skills'" :up-button="'#about'" :down-button="'#experience'"
                    class="from-cyan-900 to-blue-900">
        <!-- Text Section -->
        <div class="flex-1 flex flex-col justify-center items-center gap-6 w-full">
            <div class="relative w-full">
                <p class="font-extrabold text-3xl inline-block pb-2 text-slate-300">
                    Skills
                </p>
                <div class="absolute bottom-0 left-0 w-full h-1 bg-blue-500"></div>
            </div>
            <div class="grid sm:grid-cols-4 grid-cols-2 justify-center items-center gap-6">
                <div class="flex flex-col justify-center items-center gap-2 border-2 border-slate-300 rounded-full w-24 h-24 drop-shadow-2xl">
                    <p class="text-slate-300 pointer-events-none">HTML</p>
                </div>
                <div class="flex flex-col justify-center items-center gap-2 border-2 border-slate-300 rounded-full w-24 h-24 drop-shadow-2xl">
                    <p class="text-slate-300 pointer-events-none">PHP</p>
                </div>
                <div class="flex flex-col justify-center items-center gap-2 border-2 border-slate-300 rounded-full w-24 h-24 drop-shadow-2xl">
                    <p class="text-slate-300">Javascript</p>
                </div>
                <div class="flex flex-col justify-center items-center gap-2 border-2 border-slate-300 rounded-full w-24 h-24 drop-shadow-2xl">
                    <p class="text-slate-300">CSS</p>
                </div>
                <div class="flex flex-col justify-center items-center gap-2 border-2 border-slate-300 rounded-full w-24 h-24 drop-shadow-2xl">
                    <p class="text-slate-300">SASS</p>
                </div>
                <div class="flex flex-col justify-center items-center gap-2 border-2 border-slate-300 rounded-full w-24 h-24 drop-shadow-2xl">
                    <p class="text-slate-300">Laravel</p>
                </div>
                <div class="flex flex-col justify-center items-center gap-2 border-2 border-slate-300 rounded-full w-24 h-24 drop-shadow-2xl">
                    <p class="text-slate-300">Wordpress</p>
                </div>
                <div class="flex flex-col justify-center items-center gap-2 border-2 border-slate-300 rounded-full w-24 h-24 drop-shadow-2xl">
                    <p class="text-slate-300">MySQL</p>
                </div>
                <div class="flex flex-col justify-center items-center gap-2 border-2 border-slate-300 rounded-full w-24 h-24 drop-shadow-2xl">
                    <p class="text-slate-300">Tailwind</p>
                </div>
                <div class="flex flex-col justify-center items-center gap-2 border-2 border-slate-300 rounded-full w-24 h-24 drop-shadow-2xl">
                    <p class="text-slate-300">Postman</p>
                </div>
                <div class="flex flex-col justify-center items-center gap-2 border-2 border-slate-300 rounded-full w-24 h-24 drop-shadow-2xl">
                    <p class="text-slate-300">Git</p>
                </div>
                <div class="flex flex-col justify-center items-center gap-2 border-2 border-slate-300 rounded-full w-24 h-24 drop-shadow-2xl">
                    <p class="text-slate-300">Filament</p>
                </div>
            </div>
        </div>
    </x-home-section>
    <!-- Experience Section -->
    <x-home-section :div-id="'experience'" :up-button="'#skills'" :down-button="'#projects'"
                    class="from-blue-900 to-indigo-900">
        <div class="flex flex-col items-center gap-6">
            <!-- Text Section -->
            <div class="flex-1 flex flex-col justify-center items-start gap-6">
                <div class="relative w-full">
                    <p class="font-extrabold text-3xl inline-block pb-2 text-slate-300">
                        Experience
                    </p>
                    <div class="absolute bottom-0 left-0 w-full h-1 bg-blue-500"></div>
                </div>
                <div class="grid grid-cols-1 xl:grid-cols-2 gap-6 justify-center items-start group/list">
                    @foreach(WorkExperience::whereNull('end_date')->get() as $experience)
                        <x-experience :experience="$experience"></x-experience>
                    @endforeach
                    @foreach(WorkExperience::whereNotNull('end_date')->orderBy('end_date', 'desc')->get() as $experience)
                        <x-experience :experience="$experience"></x-experience>
                    @endforeach
                </div>
            </div>
        </div>
    </x-home-section>
    <x-home-section :div-id="'projects'" :up-button="'#experience'"
                    class="from-indigo-900 to-green-900">
        <div class="flex flex-col items-center gap-6">
            <div class="flex-1 flex flex-col justify-center items-start gap-6">
                <div class="relative w-full">
                    <p class="font-extrabold text-3xl inline-block pb-2 text-slate-300">
                        Projects
                    </p>
                    <div class="absolute bottom-0 left-0 w-full h-1 bg-green-500"></div>
                </div>
            </div>
            <div class="grid grid-cols-1 xl:grid-cols-2 gap-6 justify-center items-start group/projects">
                <x-project :title="'Personal Website (Laravel)'"
                           :link="'some-site.com'"
                           :tags="['Laravel', 'PHP', 'TailwindCSS', 'MySQL']">
                    This was my second personal site, I decided after working a lot with Laravel to re-write my website,
                    with the idea of future expansion to include a personal area for Project and Client management as
                    well as a test bed for testing and learning more about Laravel.
                </x-project>
                <x-project :title="'Personal Website (React)'"
                           :link="'https://github.com/lsvMoretti/personal-site'"
                           :tags="['React', 'TailwindCSS']">
                    This was my first venture into react, a simple one page application that has changed a few times but
                    was designed to be my own site before switching it to Laravel.
                </x-project>
                <x-project :title="'PoliceMP'"
                           :link="'https://github.com/lsvMoretti/policemp'"
                           :tags="['C#', 'MySQL', 'Git', 'Design', 'HTML', 'API']">
                    PoliceMP was my second large scale project with in the GTA community. Using mainly C#, I developed
                    various frameworks that also included helping to alter the NPC behaviour to bring unique police call
                    out events, including better K9 systems as well as Anti Cheat systems and more!
                </x-project>
                <x-project :title="'Southland Roleplay'"
                           :link="'https://github.com/lsvMoretti/southland-roleplay'"
                           :tags="['C#', 'Restful APIs', 'SignalR', 'HTML', 'JS', 'CSS', 'MySQL', 'Git']">
                    Southland Roleplay was one of my first 'big' projects. Working on both database, external APIs and
                    tying in with the <a class="pointer-events-auto" href="https://altv.mp">alt:V</a> framework,
                    bringing together roleplay features which included Economy systems, Vehicle and Player systems and
                    tying together third party services like Weather APIs, Discord and a SignalR service to bring
                    webhook style events to services which couldn't allow it.
                </x-project>
            </div>
        </div>
    </x-home-section>
@endsection