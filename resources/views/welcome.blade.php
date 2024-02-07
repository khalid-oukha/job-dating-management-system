@extends('layouts.master')

@section('title')
    Home
@endsection

@section('title_page')
    Company's
@endsection

@section('css')
@endsection

@section('content')
    <main class="my-4">
        <section>
            <div class="relative bg-gradient-to-r from-black to-black py-16 font-[sans-serif]">
                <div class="absolute inset-0">
                    <img src="{{ URL::asset('assets/images/jobdatingcover.jpg') }}" alt="Background Image"
                        class="w-full h-full object-cover opacity-50" />
                </div>
                <div class="relative max-w-screen-xl mx-auto px-8 z-10 text-center text-white">
                    <h1 class="text-4xl md:text-5xl font-extrabold leading-tight mb-6">Welcome to Annoncements : Your Source
                        To Find Dream Job</h1>

                    <p class="text-lg md:text-xl mb-8">Experience excellence like never before with our exclusive products
                        and services.</p>
                    @guest
                        <a href="{{ route('register') }}" type="button"
                            class="bg-primary-100 hover:bg-primary-100 text-white text-base font-semibold px-8 py-2.5 rounded-full transition duration-300 ease-in-out shadow-lg hover:shadow-xl">Get
                            Started</a>
                    @endguest
                    @auth
                        <a href="" type="button"
                            class="bg-primary-100 hover:bg-primary-100 text-white text-base font-semibold px-8 py-2.5 rounded-full transition duration-300 ease-in-out shadow-lg hover:shadow-xl">View
                            announcements</a>
                    @endauth

                </div>
            </div>
        </section>

        <section class="py-2 ">
            <div>
                <h2 class=" text-2xl font-bold text-center sm:text-4xl text-primary-100">Lastest Annoncements</h2>
                <p class="max-w-3xl mx-auto mt-4 text-xl text-primary-100 dark:text-white text-center ">Explore the latest
                    features that enhance your learning experience and make it even more exciting.
                </p>
            </div>
            <div class="container max-w-7xl px-2 mx-auto">
                <div id="match-container" class="grid-cols-1 sm:grid md:grid-cols-3 ">
                    @foreach ($announcements as $announcement)
                        <div
                            class="match-card-display  mx-3 mt-6 flex flex-col rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-gray-800 sm:shrink-0 sm:grow sm:basis-0">
                            <a href="#!">
                                <img class="rounded-t-lg" src="{{ URL::asset('assets/images/cigidim.jpg') }}"
                                    alt="Annoncement" />
                            </a>
                            <div class="p-5">
                                <h5 class="mb-2 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                                    {{ $announcement->title }}
                                </h5>
                                <h5 class="mb-2 text-l  leading-tight text-neutral-500 dark:text-neutral-50">

                                </h5>
                                <p class=" text-base text-neutral-600 dark:text-neutral-200">
                                    {{ $announcement->content }}

                                </p>
                            </div>

                            <div class="p-3 flex justify-end">
                                <a href=""
                                    class="text-primary-100 border border-primary-100 py-2 px-3 rounded inline-flex  items-center">
                                    View Annoncement
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" viewBox="0 0 24 24" class="w-6 h-6 ml-2">
                                        <path d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                    </svg>
                                </a>
                            </div>
                            <div
                                class="mt-auto border-t-2 border-neutral-100 px-6 py-3 text-center dark:border-neutral-600 dark:text-neutral-50">
                                @foreach ($announcement->skills as $skill)
                                    <small class="bg-gray-200 border mx-2 px-3 py-1.5 rounded-lg text-xs">
                                        {{ $skill->name }}
                                    </small>
                                @endforeach

                            </div>
                        </div>
                    @endforeach


                </div>
            </div>

        </section>
        @auth

            <section class="py-2 bg-primary-100">
                <div class="max-w-7xl mx-auto my-8 px-2">

                    <div class=" text-2xl font-bold text-center sm:text-4xl text-white">
                        Recommended Jobs Tailored for You
                    </div>
                    <p class="max-w-3xl mx-auto mt-4 text-xl text-white dark:text-white text-center ">
                        Explore the latest
                        features that enhance your learning experience and make it even more exciting.
                    </p>
                    <ul class="grid gap-8 md:grid-cols-2 lg:grid-cols-3 p-2 xl:p-5">


                        @foreach ($recommendedAnnouncement as $announcement)
                            <li
                                class="relative bg-white flex flex-col justify-between border rounded shadow-md hover:shadow-primary-400">

                                <a class="relative" href="/tool/writey-ai">
                                    <div class="relative w-full aspect-video">
                                        <img class="rounded w-full h-full object-cover"
                                            src="https://images.unsplash.com/photo-1511467687858-23d96c32e4ae?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw1fHxrZXlib2FyZHxlbnwwfDB8fHwxNjk5NTI1MDAzfDA&ixlib=rb-4.0.3&q=80&w=1080"
                                            alt="Writey A.I" loading="lazy">

                                        <div
                                            class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-b from-gray-800 to-gray-500 text-white">
                                            <h2 class="text-xl font-semibold">{{ $announcement->title }}
                                            </h2>
                                            <p class="font-medium text-sm">Most advanced language A.I</p>
                                        </div>
                                    </div>
                                </a>

                                <div class="flex flex-col justify-beetween gap-3 px-4 py-2">

                                    <p class="text-gray-600 two-lines">
                                        {{ $announcement->title }}
                                    </p>

                                    <ul class="flex flex-wrap items-center justify-start text-sm gap-2">
                                        <li title="Pricing type"
                                            class="flex items-center cursor-pointer gap-0.5 bg-gray-100 text-black px-2 py-0.5 rounded-full">
                                            <span> {{ $announcement->companie->name }}</span>
                                        </li>

                                    </ul>
                                    <p class="font-medium text-sm">{{ $announcement->content }}</p>

                                    <div class="flex flex-wrap text-sm gap-2 my-1">
                                        @foreach ($announcement->skills as $skill)
                                            <small class="bg-gray-200 border mx-2 px-3 py-1.5 rounded-lg text-xs">
                                                {{ $skill->name }}
                                            </small>
                                        @endforeach
                                    </div>
                                </div>

                            </li>
                        @endforeach


                    </ul>

                </div>
            </section>

        @endauth

        <section>
            <div class="relative bg-gradient-to-r from-black to-black py-16 font-[sans-serif]">
                <div class="absolute inset-0">
                    <img src="public/assets/images/loadmore.jpg" alt="Background Image"
                        class="w-full h-full object-cover opacity-50" />
                </div>

                <div class="relative max-w-screen-xl mx-auto px-8 z-10 text-center text-white">
                    <h2 class="text-4xl md:text-5xl font-extrabold leading-tight mb-6">Explore More in Our Annoncement</h2>
                    <p class="text-lg md:text-xl mb-8">Discover a wide array of articles on various topics in our
                        Annoncement section. View all articles to expand your knowledge!</p>
                    <a href="articles" type="button"
                        class="bg-primary-100 hover:bg-primary-100 text-white text-base font-semibold px-8 py-2.5 rounded-full transition duration-300 ease-in-out shadow-lg hover:shadow-xl">view
                        all Annoncements</a>

                </div>

            </div>
        </section>


    </main>
@endsection

@section('scripts')
@endsection
