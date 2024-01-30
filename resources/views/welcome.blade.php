@extends('layouts.master')

@section('title')
    dashboard management
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
                <img src="{{URL::asset('assets/images/jobdatingcover.jpg')}}" alt="Background Image" class="w-full h-full object-cover opacity-50" />
            </div>
            <div class="relative max-w-screen-xl mx-auto px-8 z-10 text-center text-white">
                <h1 class="text-4xl md:text-5xl font-extrabold leading-tight mb-6">Welcome to Annoncements : Your Source To Find Dream Job</h1>
                <p class="text-lg md:text-xl mb-8">Experience excellence like never before with our exclusive products and services.</p>  
                    <a href="signup" type="button" class="bg-primary-100 hover:bg-primary-100 text-white text-base font-semibold px-8 py-2.5 rounded-full transition duration-300 ease-in-out shadow-lg hover:shadow-xl">Get Started</a>    
    
            </div>
        </div>
    </section>
    
    <section class="py-2 ">
        <div>
            <h2 class=" text-2xl font-bold text-center sm:text-4xl text-primary-100">Lastest Annoncements</h2>
            <p class="max-w-3xl mx-auto mt-4 text-xl text-primary-100 dark:text-white text-center ">Explore the latest features that enhance your learning experience and make it even more exciting.</p>
        </div>
        <div class="container max-w-7xl px-2 mx-auto">
            <div id="match-container" class="grid-cols-1 sm:grid md:grid-cols-3 ">
    
                <div class="match-card-display  mx-3 mt-6 flex flex-col rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-gray-800 sm:shrink-0 sm:grow sm:basis-0">
                    <a href="#!">
                        <img class="rounded-t-lg" src="{{URL::asset('assets/images/cigidim.jpg')}}" alt="Annoncement" />
                    </a>
                    <div class="p-5">
                        <h5 class="mb-2 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        </h5>
                        <h5 class="mb-2 text-l  leading-tight text-neutral-500 dark:text-neutral-50">
                            
                        </h5>
                        <p class=" text-base text-neutral-600 dark:text-neutral-200">
                            Ab illo sed quam, nostrum ducimus, maxime non laudantium nobis magni commodi adipisci maiores vitae autem eos aliquid laborum perspiciatis accusantium modi.
                            Ab illo sed quam, nostrum ducimus, maxime non laudantium nobis magni commodi adipisci maiores vitae autem eos aliquid laborum perspiciatis accusantium modi.
                        </p>
                    </div>
                    <div class="p-3 flex justify-end">
                        <a href="" class="text-primary-100 border border-primary-100 py-2 px-3 rounded inline-flex  items-center">
                            View Annoncement
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-6 h-6 ml-2">
                                <path d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="mt-auto border-t-2 border-neutral-100 px-6 py-3 text-center dark:border-neutral-600 dark:text-neutral-50">
                        <small></small>
                    </div>
                </div>

                <div class="match-card-display  mx-3 mt-6 flex flex-col rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-gray-800 sm:shrink-0 sm:grow sm:basis-0">
                    <a href="#!">
                        <img class="rounded-t-lg" src="{{URL::asset('assets/images/cigidim.jpg')}}" alt="Annoncement" />
                    </a>
                    <div class="p-5">
                        <h5 class="mb-2 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        </h5>
                        <h5 class="mb-2 text-l  leading-tight text-neutral-500 dark:text-neutral-50">
                            
                        </h5>
                        <p class=" text-base text-neutral-600 dark:text-neutral-200">
                            Ab illo sed quam, nostrum ducimus, maxime non laudantium nobis magni commodi adipisci maiores vitae autem eos aliquid laborum perspiciatis accusantium modi.
                            Ab illo sed quam, nostrum ducimus, maxime non laudantium nobis magni commodi adipisci maiores vitae autem eos aliquid laborum perspiciatis accusantium modi.
                        </p>
                    </div>
                    <div class="p-3 flex justify-end">
                        <a href="" class="text-primary-100 border border-primary-100 py-2 px-3 rounded inline-flex  items-center">
                            View Annoncement
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-6 h-6 ml-2">
                                <path d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="mt-auto border-t-2 border-neutral-100 px-6 py-3 text-center dark:border-neutral-600 dark:text-neutral-50">
                        <small></small>
                    </div>
                </div>
                <div class="match-card-display  mx-3 mt-6 flex flex-col rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-gray-800 sm:shrink-0 sm:grow sm:basis-0">
                    <a href="#!">
                        <img class="rounded-t-lg" src="{{URL::asset('assets/images/cigidim.jpg')}}" alt="Annoncement" />
                    </a>
                    <div class="p-5">
                        <h5 class="mb-2 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        </h5>
                        <h5 class="mb-2 text-l  leading-tight text-neutral-500 dark:text-neutral-50">
                            
                        </h5>
                        <p class=" text-base text-neutral-600 dark:text-neutral-200">
                            Ab illo sed quam, nostrum ducimus, maxime non laudantium nobis magni commodi adipisci maiores vitae autem eos aliquid laborum perspiciatis accusantium modi.
                            Ab illo sed quam, nostrum ducimus, maxime non laudantium nobis magni commodi adipisci maiores vitae autem eos aliquid laborum perspiciatis accusantium modi.
                        </p>
                    </div>
                    <div class="p-3 flex justify-end">
                        <a href="" class="text-primary-100 border border-primary-100 py-2 px-3 rounded inline-flex  items-center">
                            View Annoncement
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-6 h-6 ml-2">
                                <path d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="mt-auto border-t-2 border-neutral-100 px-6 py-3 text-center dark:border-neutral-600 dark:text-neutral-50">
                        <small></small>
                    </div>
                </div>

    
            </div>
        </div>
        <div class="my-5 flex flex-col items-center flex-wrap content-center">
    
            <p class="max-w-3xl mx-auto mt-4 text-xl text-primary-100 dark:text-white text-center ">Discover a wide array of articles on various topics in our Annoncement section. View all articles to expand your knowledge!</p>
    
            <div class="relative max-w-screen-xl mx-auto px-8 z-10 text-center text-white">
                <h2 class="text-4xl md:text-5xl font-extrabold leading-tight mb-6">Explore More in Our Annoncement</h2>
                <p class="text-lg md:text-xl mb-8">Discover a wide array of articles on various topics in our Annoncement section. View all articles to expand your knowledge!</p>
                <a href="articles" type="button" class="bg-primary-100 hover:bg-primary-100 text-white text-base font-semibold px-8 py-2.5 rounded-full transition duration-300 ease-in-out shadow-lg hover:shadow-xl">view all Annoncements</a>
    
            </div>
    
        </div>
    </section>
    
    <section>
        <div class="relative bg-gradient-to-r from-black to-black py-16 font-[sans-serif]">
            <div class="absolute inset-0">
                <img src="public/assets/images/loadmore.jpg" alt="Background Image" class="w-full h-full object-cover opacity-50" />
            </div>
    
            <div class="relative max-w-screen-xl mx-auto px-8 z-10 text-center text-white">
                <h2 class="text-4xl md:text-5xl font-extrabold leading-tight mb-6">Explore More in Our Annoncement</h2>
                <p class="text-lg md:text-xl mb-8">Discover a wide array of articles on various topics in our Annoncement section. View all articles to expand your knowledge!</p>
                <a href="articles" type="button" class="bg-primary-100 hover:bg-primary-100 text-white text-base font-semibold px-8 py-2.5 rounded-full transition duration-300 ease-in-out shadow-lg hover:shadow-xl">view all Annoncements</a>
    
            </div>
    
        </div>
    </section>
</main>



@endsection

@section('scripts')

@endsection