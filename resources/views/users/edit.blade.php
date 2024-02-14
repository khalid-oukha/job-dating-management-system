@extends('layouts.master')

@section('title')
    user management
@endsection

@section('title_page')
    user's
@endsection

@section('css')
@endsection

@section('content')
    <main id="main" class="pt-16 h-screen px-28">
        <h2 class="my-6 text-4xl font-semibold text-center font-poppins tracking-widest text-gray-700 dark:text-gray-200">
            <span class="text-primary-100 dark:text-orange">Edit </span> user
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
                            <h1 class="text-xl font-semibold mb-4 text-gray-900 dark:text-gray-100">user Data</h1>
                            <p class="text-gray-600 dark:text-gray-300 mb-6">Here you can edit user's informations.</p>
                            <form action="{{ route('user.update', ['user' => $user]) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="mb-4">
                                    <label for="message"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                        <input type="text" value="{{$user->name}}" placeholder="user Name" name="name"
                                        class="border p-2 rounded w-full">
                                        <input type="hidden" value="{{$user->password}}" placeholder="user Name" name="password"
                                        class="border p-2 rounded w-full">
                                </div>
                                <div class="mb-4">
                                    <label for="message"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                    <input type="email"  value="{{$user->email}}" placeholder="email" name="email"
                                        class="border p-2 rounded w-full">
                                </div>

                                <div class="mb-4">
                                    <label for="message"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">role</label>
                                        <select name="role_name" class="border p-2 rounded w-full" id="">
                                            @foreach ($roles as $role)
                                            <option class="text-gray-900 dark:text-white" value="{{$role->name}}">{{$role->name}}</option>
                                            @endforeach
                                        </select>
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
