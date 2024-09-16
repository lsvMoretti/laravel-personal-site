@php use Illuminate\Support\Carbon; @endphp
@extends('layouts.app')

@section('content')
    <div class="fixed inset-0 z-30 transition duration-300 lg:absolute">
        <div class="mx-auto min-h-screen max-w-screen-xl px-6 py-12 font-sans md:px-12 md:py-20 lg:px-24 lg:py-0">
            <div class="lg:flex lg:justify-between lg:gap-4">
                <div class="lg:sticky lg:top-0 lg:flex lg:max-h-screen lg:w-1/2 lg:flex-col lg:justify-between lg:py-24">
                    <div class="flex flex-col gap-6">
                        <h1 class="text-5xl text-slate-200 font-extrabold">Andrew Cade</h1>
                        <h2 class="text-2xl font-semibold">Software Engineer</h2>
                        <p class="max-w-sm">Delivering complete web solutions, from intuitive interfaces to powerful
                            back-end
                            systems.</p>
                        <nav class="pl-6">
                            <ul class="flex flex-col gap-4">
                                <li>
                                    <a id="about"
                                       href="#about-me"
                                       class="uppercase text-sm hover:cursor-pointer hover:opacity-80">
                                        About
                                    </a>
                                </li>
                                <li>
                                    <a id="experience"
                                       href="#experiences"
                                       class="uppercase text-sm hover:cursor-pointer hover:opacity-80"
                                    >
                                        Experience
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="pt-24 lg:w-1/2 lg:py-24">
                    <div id="about-me"
                         class="mb-16 scroll-mt-16 md:mb-24 lg:mb-36 lg:scroll-mt-24 space-y-4">
                        <p>Before 2023, I worked in a local family business. In 2022, I decided to pursue a new career
                            path in software development. I dedicated my free time to studying coding best practices and
                            object-oriented programming (OOP) techniques. Whenever possible, I explored different
                            programming languages and showcased my skills through personal projects.</p>
                        <p>I worked on a variety of coding projects, from developing Discord bots and game scripts to
                            building websites to experiment with various frameworks. In late 2022, I had the opportunity
                            to transition into software development, thanks to the support of <a
                                    class="!hover:opacity-80 !hover:cursor-pointer" href="https://iasme.co.uk">The IASME
                                Consortium.</a></p>
                    </div>
                </div>
                <div id="experiences">
                </div>
            </div>
        </div>
    </div>
@endsection
