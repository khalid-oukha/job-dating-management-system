@extends('layouts.master')

@section('title')
    statistics
@endsection

@section('title_page')
statistics
@endsection

@section('css')
@endsection

@section('content')

<main id="main" class="mt-24 px-28">
    <div class="h-full overflow-y-auto">
        <div class="container px-6 mx-auto grid">
            <h2 class="my-6 text-4xl font-semibold font-poppins tracking-widest text-gray-700 dark:text-gray-200">
                <span class="text-primary-100 dark:text-orange">ADMIN</span> DASHBOARD
            </h2>
            <!-- Cards -->
            <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
                <!-- Card -->
                <div id="users" class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                    <div class="p-3 mr-4 rounded-full">
                        <span class="h-12 w-12 dark:bg-white bg-primary-100 rounded-full flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-orange dark:text-primary-100" width="26" height="20" viewBox="0 0 30 24">
                                <path fill="currentColor" d="M4.5 10.5C6.15469 10.5 7.5 9.15469 7.5 7.5C7.5 5.84531 6.15469 4.5 4.5 4.5C2.84531 4.5 1.5 5.84531 1.5 7.5C1.5 9.15469 2.84531 10.5 4.5 10.5ZM25.5 10.5C27.1547 10.5 28.5 9.15469 28.5 7.5C28.5 5.84531 27.1547 4.5 25.5 4.5C23.8453 4.5 22.5 5.84531 22.5 7.5C22.5 9.15469 23.8453 10.5 25.5 10.5ZM27 12H24C23.175 12 22.4297 12.3328 21.8859 12.8719C23.775 13.9078 25.1156 15.7781 25.4062 18H28.5C29.3297 18 30 17.3297 30 16.5V15C30 13.3453 28.6547 12 27 12ZM15 12C17.9016 12 20.25 9.65156 20.25 6.75C20.25 3.84844 17.9016 1.5 15 1.5C12.0984 1.5 9.75 3.84844 9.75 6.75C9.75 9.65156 12.0984 12 15 12ZM18.6 13.5H18.2109C17.2359 13.9688 16.1531 14.25 15 14.25C13.8469 14.25 12.7687 13.9688 11.7891 13.5H11.4C8.41875 13.5 6 15.9188 6 18.9V20.25C6 21.4922 7.00781 22.5 8.25 22.5H21.75C22.9922 22.5 24 21.4922 24 20.25V18.9C24 15.9188 21.5812 13.5 18.6 13.5ZM8.11406 12.8719C7.57031 12.3328 6.825 12 6 12H3C1.34531 12 0 13.3453 0 15V16.5C0 17.3297 0.670312 18 1.5 18H4.58906C4.88438 15.7781 6.225 13.9078 8.11406 12.8719Z" />
                            </svg>
                        </span>
                    </div>
                    <div>
                        <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                            Total Students
                        </p>
                        <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                            {{ $totalStudents }}
                        </p>
                    </div>
                </div>
                <div id="users" class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                    <div class="p-3 mr-4 rounded-full">
                        <span class="h-12 w-12 dark:bg-white bg-primary-100 rounded-full flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-orange dark:text-primary-100" width="26" height="20" viewBox="0 0 30 24">
                                <path fill="currentColor" d="M4.5 10.5C6.15469 10.5 7.5 9.15469 7.5 7.5C7.5 5.84531 6.15469 4.5 4.5 4.5C2.84531 4.5 1.5 5.84531 1.5 7.5C1.5 9.15469 2.84531 10.5 4.5 10.5ZM25.5 10.5C27.1547 10.5 28.5 9.15469 28.5 7.5C28.5 5.84531 27.1547 4.5 25.5 4.5C23.8453 4.5 22.5 5.84531 22.5 7.5C22.5 9.15469 23.8453 10.5 25.5 10.5ZM27 12H24C23.175 12 22.4297 12.3328 21.8859 12.8719C23.775 13.9078 25.1156 15.7781 25.4062 18H28.5C29.3297 18 30 17.3297 30 16.5V15C30 13.3453 28.6547 12 27 12ZM15 12C17.9016 12 20.25 9.65156 20.25 6.75C20.25 3.84844 17.9016 1.5 15 1.5C12.0984 1.5 9.75 3.84844 9.75 6.75C9.75 9.65156 12.0984 12 15 12ZM18.6 13.5H18.2109C17.2359 13.9688 16.1531 14.25 15 14.25C13.8469 14.25 12.7687 13.9688 11.7891 13.5H11.4C8.41875 13.5 6 15.9188 6 18.9V20.25C6 21.4922 7.00781 22.5 8.25 22.5H21.75C22.9922 22.5 24 21.4922 24 20.25V18.9C24 15.9188 21.5812 13.5 18.6 13.5ZM8.11406 12.8719C7.57031 12.3328 6.825 12 6 12H3C1.34531 12 0 13.3453 0 15V16.5C0 17.3297 0.670312 18 1.5 18H4.58906C4.88438 15.7781 6.225 13.9078 8.11406 12.8719Z" />
                            </svg>
                        </span>
                    </div>
                    <div>
                        <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                            Total announcements
                        </p>
                        <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                            {{ $totalAnnouncements }}
                        </p>
                    </div>
                </div>
                <!-- Card -->
                <div id="teams" class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                    <div class="p-3 mr-4 rounded-full">
                        <span class="h-12 w-12 dark:bg-white bg-primary-100 rounded-full flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-orange dark:text-primary-100" width="26" height="20" viewBox="0 0 30 24">
                                <path fill="currentColor" d="M4.5 10.5C6.15469 10.5 7.5 9.15469 7.5 7.5C7.5 5.84531 6.15469 4.5 4.5 4.5C2.84531 4.5 1.5 5.84531 1.5 7.5C1.5 9.15469 2.84531 10.5 4.5 10.5ZM25.5 10.5C27.1547 10.5 28.5 9.15469 28.5 7.5C28.5 5.84531 27.1547 4.5 25.5 4.5C23.8453 4.5 22.5 5.84531 22.5 7.5C22.5 9.15469 23.8453 10.5 25.5 10.5ZM27 12H24C23.175 12 22.4297 12.3328 21.8859 12.8719C23.775 13.9078 25.1156 15.7781 25.4062 18H28.5C29.3297 18 30 17.3297 30 16.5V15C30 13.3453 28.6547 12 27 12ZM15 12C17.9016 12 20.25 9.65156 20.25 6.75C20.25 3.84844 17.9016 1.5 15 1.5C12.0984 1.5 9.75 3.84844 9.75 6.75C9.75 9.65156 12.0984 12 15 12ZM18.6 13.5H18.2109C17.2359 13.9688 16.1531 14.25 15 14.25C13.8469 14.25 12.7687 13.9688 11.7891 13.5H11.4C8.41875 13.5 6 15.9188 6 18.9V20.25C6 21.4922 7.00781 22.5 8.25 22.5H21.75C22.9922 22.5 24 21.4922 24 20.25V18.9C24 15.9188 21.5812 13.5 18.6 13.5ZM8.11406 12.8719C7.57031 12.3328 6.825 12 6 12H3C1.34531 12 0 13.3453 0 15V16.5C0 17.3297 0.670312 18 1.5 18H4.58906C4.88438 15.7781 6.225 13.9078 8.11406 12.8719Z" />
                            </svg>
                        </span>
                    </div>
                    <div>
                        <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                            Total companies
                        </p>
                        <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                            {{ $totalCompanies }}
                        </p>
                    </div>
                </div>


                <!-- Card -->

                <div id="teams" class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                    <div class="p-3 mr-4 rounded-full">
                        <span class="h-12 w-12 dark:bg-white bg-primary-100 rounded-full flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-orange dark:text-primary-100" width="26" height="20" viewBox="0 0 30 24">
                                <path fill="currentColor" d="M4.5 10.5C6.15469 10.5 7.5 9.15469 7.5 7.5C7.5 5.84531 6.15469 4.5 4.5 4.5C2.84531 4.5 1.5 5.84531 1.5 7.5C1.5 9.15469 2.84531 10.5 4.5 10.5ZM25.5 10.5C27.1547 10.5 28.5 9.15469 28.5 7.5C28.5 5.84531 27.1547 4.5 25.5 4.5C23.8453 4.5 22.5 5.84531 22.5 7.5C22.5 9.15469 23.8453 10.5 25.5 10.5ZM27 12H24C23.175 12 22.4297 12.3328 21.8859 12.8719C23.775 13.9078 25.1156 15.7781 25.4062 18H28.5C29.3297 18 30 17.3297 30 16.5V15C30 13.3453 28.6547 12 27 12ZM15 12C17.9016 12 20.25 9.65156 20.25 6.75C20.25 3.84844 17.9016 1.5 15 1.5C12.0984 1.5 9.75 3.84844 9.75 6.75C9.75 9.65156 12.0984 12 15 12ZM18.6 13.5H18.2109C17.2359 13.9688 16.1531 14.25 15 14.25C13.8469 14.25 12.7687 13.9688 11.7891 13.5H11.4C8.41875 13.5 6 15.9188 6 18.9V20.25C6 21.4922 7.00781 22.5 8.25 22.5H21.75C22.9922 22.5 24 21.4922 24 20.25V18.9C24 15.9188 21.5812 13.5 18.6 13.5ZM8.11406 12.8719C7.57031 12.3328 6.825 12 6 12H3C1.34531 12 0 13.3453 0 15V16.5C0 17.3297 0.670312 18 1.5 18H4.58906C4.88438 15.7781 6.225 13.9078 8.11406 12.8719Z" />
                            </svg>
                        </span>
                    </div>
                    <div>
                        <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                            Most required skill
                        </p>
                        <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                            {{ $skillRec->name }}
                        </p>
                    </div>
                </div>

                <!-- Card -->

            </div>


        </div>
    </div>
</main>

@endsection

@section('scripts')
@endsection
