@extends('layouts.master')

@section('title')
    company management
@endsection

@section('title_page')
    Company's
@endsection

@section('css')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
<link href="https://unpkg.com/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/css/tom-select.css" rel="stylesheet">
@endsection

@section('content')
    <main id="main" class="pt-16 h-screen px-28">
        <h2 class="my-6 text-4xl font-semibold text-center font-poppins tracking-widest text-gray-700 dark:text-gray-200">
            <span class="text-primary-100 dark:text-orange">Add </span> a new Announcement
        </h2>
        <div class="w-full overflow-hidden rounded-lg shadow-xs">

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Whoops!</strong>
                <span class="block sm:inline">There were some problems with your input.</span>
                <ul class="list-disc mt-2 ml-4">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

            <div class="w-full overflow-x-auto">

                <div class="bg-gray-100 dark:bg-gray-800 transition-colors duration-300">
                    <div class="container mx-auto p-4">
                        <div class="bg-white dark:bg-gray-700 shadow rounded-lg p-6">
                            <h1 class="text-xl font-semibold mb-4 text-gray-900 dark:text-gray-100">Announcement Data</h1>
                            <p class="text-gray-600 dark:text-gray-300 mb-6">Here you can add Announcement's informations.</p>
                            <form action="{{route('announcement.store')}}" method="POST">
                                @csrf
                                @method('post')

                                <div class="mb-4">
                                    <label for="message"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                                    <input type="text" placeholder="your title here" name="title" value="{{$Announcement->title}}"
                                        class="border p-2 rounded w-full">
                                </div>
                                <div class="mb-4">
                                    <label for="message"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">user</label>
                                        <select name="user_id" class="border p-2 rounded w-full"  id="">
                                            @foreach ($users as $user)
                                            <option class="text-gray-900 dark:text-white" value="{{$user->id}}">{{$user->name}}</option>
                                            @endforeach
                                        </select>
                                </div>
                                <div class="mb-4">
                                    <label for="message"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">skills</label>
                                        <select name="skills[]" multiple class="border p-2 rounded w-full" id="select-skill">
                                            @foreach ($skills as $skill)
                                                <option class="text-gray-900 dark:text-white" value="{{ $skill->id }}"
                                                    @if ($Announcement->skills->contains($skill->id)) selected @endif>
                                                    {{ $skill->name }}
                                                </option>
                                            @endforeach

                                        </select>
                                </div>
                                <div class="mb-4">
                                    <label for="message"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Companie</label>
                                        <select name="companie_id" class="border p-2 rounded w-full" id="">
                                            @foreach ($companies as $companie)
                                            <option class="text-gray-900 dark:text-white" value="{{$companie->id}}">{{$companie->name}}</option>
                                            @endforeach
                                        </select>
                                </div>


                                <div class="md:grid-cols-2 gap-4 mb-4">

                                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                                    <textarea name="content" id="message" rows="8"   class=" w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"> {{$Announcement->content}}
                                    </textarea>

                                </div>

                                <div class="mb-4">

                                    <button type="submit"
                                        class="px-4 py-2 bg-primary-100 rounded  text-white hover:bg-blue-600 focus:outline-none transition-colors">
                                        Confirm And Submit
                                    </button>

                                    <a href="{{route('announcement.index')}}" type="button"
                                        class="px-4 py-2 bg-orange rounded  text-white hover:bg-blue-600 focus:outline-none transition-colors">
                                        Cancel
                                    </a>
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
    <!-- Include TomSelect (without jQuery) -->
    <script src="https://cdn.jsdelivr.net/npm/tom-select/dist/js/tom-select.complete.min.js"></script>

    <!-- Include jQuery separately, after TomSelect -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Initialize TomSelect -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new TomSelect('#select-skill', {
                maxItems: 3,
            });
        });
    </script>
@endsection
