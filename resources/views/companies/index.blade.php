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
    <main id="main" class=" pt-16 px-28">
        <h2 class="my-6 text-4xl font-semibold text-center font-poppins tracking-widest text-gray-700 dark:text-gray-200">
            <span class="text-primary-100 dark:text-orange">@yield('title_page') </span> - Management
        </h2>
        <a href="{{route('companie.create')}}"
            class="px-4 py-2 my-2 bg-orange rounded  text-white hover:bg-primary-100 focus:outline-none transition-colors">
            Add a Companie
        </a>


        <div class="w-full py-2 overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">ID</th>
                            <th class="px-4 py-3">name</th>
                            <th class="px-1 py-3">title</th>
                            <th class="px-4 py-3">description</th>
                            <th class="px-4 py-3">addresse</th>
                            <th class="px-4 py-3">founded_at</th>

                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">

                        @foreach($companies as $companie)

                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3 text-sm">{{$companie->id}}</td>
                            <td class="px-4 py-3 text-sm">{{$companie->name}}</td>
                            <td class="px-1 py-2 text-sm">{{$companie->title}}</td>
                            <td class="px-4 py-3 text-xs">
                                <span
                                    class="px-2 py-1 font-semibold leading-tight text-gray-500 rounded-full dark:bg-green-700 dark:text-green-100">
                                    {{$companie->description}}
                                 </span>
                            </td>
                            <td class="px-4 py-3 text-xs">

                                <span class="px-2 py-1 font-semibold leading-tight rounded-full">
                                    {{$companie->address}}
                                </span>

                            </td>

                            <td class="px-4 py-3">
                                <div class="flex items-center space-x-4 text-sm">
                                    <a href="{{route('companie.edit',['companie' => $companie])}}">
                                        <button
                                            class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                            aria-label="Edit">
                                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                </path>
                                            </svg>
                                        </button>
                                    </a>
                                    <a href="" onclick="return confirm('Do you really want to Delete ?');">
                                        <button
                                            class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                            aria-label="Delete">
                                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </a>


                                    <a href="" onclick="return confirm('Do you really want to Accept ?');">
                                        <span class="px-2 py-1 font-semibold leading-tight rounded-full  text-purple-600">
                                            Accept
                                        </span>
                                    </a>





                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </main>
@endsection

@section('scripts')
@endsection
