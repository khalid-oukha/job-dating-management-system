@extends('layouts.master')

@section('title')
    company management
@endsection

@section('title_page')
    Company's
@endsection

@section('css')
@endsection

@section('content')
    <main id="main" class="pt-16 h-screen px-28">
        <h2 class="my-6 text-4xl font-semibold text-center font-poppins tracking-widest text-gray-700 dark:text-gray-200">
            <span class="text-primary-100 dark:text-orange">Add </span> a new Companie
        </h2>
        <div class="w-full overflow-hidden rounded-lg shadow-xs">

            {{-- <div>
                @if ($errors->any())
                <ul>
                    @foreach ($errors as $error)
                        <li>{{$error}}</li>



                </ul>
                    
                @endif
            </div> --}}

            <div class="w-full overflow-x-auto">

                <div class="bg-gray-100 dark:bg-gray-800 transition-colors duration-300">
                    <div class="container mx-auto p-4">
                        <div class="bg-white dark:bg-gray-700 shadow rounded-lg p-6">
                            <h1 class="text-xl font-semibold mb-4 text-gray-900 dark:text-gray-100">Companie Data</h1>
                            <p class="text-gray-600 dark:text-gray-300 mb-6">Here you can add Companie's informations.</p>
                            <form action="{{route('companie.store')}}" method="POST">
                                @csrf
                                @method('post')
                                <div class="mb-4">
                                    <label for="message"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                    <input type="text" placeholder="Companie Name" name="name"
                                        class="border p-2 rounded w-full">
                                </div>
                                <div class="mb-4">
                                    <label for="message"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                                    <input type="text" placeholder="your title here" name="title"
                                        class="border p-2 rounded w-full">
                                </div>  
                                <div class="mb-4">
                                    <label for="message"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">address</label>
                                    <input type="text" placeholder="your address here" name="address"
                                        class="border p-2 rounded w-full">
                                </div>  
                                <div class="mb-4">
                                    <label for="message"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Founded at</label>
                                    <input type="date"  name="founded_at"
                                        class="border p-2 rounded w-full">
                                </div>                                
                                <div class="md:grid-cols-2 gap-4 mb-4">

                                    <label for="message"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                                    <textarea name="description" id="message" rows="4"
                                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Write your thoughts here..."></textarea>

                                </div>

                                <div class="mb-4">

                                    <button type="submit"
                                        class="px-4 py-2 bg-primary-100 rounded  text-white hover:bg-blue-600 focus:outline-none transition-colors">
                                        Confirm And Submit
                                    </button>

                                    <button type="button"
                                        class="px-4 py-2 bg-orange rounded  text-white hover:bg-blue-600 focus:outline-none transition-colors">
                                        Cancel
                                    </button>
                                </div>


                            </form>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </main>
@endsection

@section('scripts')
@endsection
