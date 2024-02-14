@extends('layouts.master')

@section('title')
    applications management
@endsection

@section('title_page')
    apply's
@endsection

@section('css')
@endsection

@section('content')
    <main id="main" class=" pt-16 px-28">
        <h2 class="my-6 text-4xl font-semibold text-center font-poppins tracking-widest text-gray-700 dark:text-gray-200">
            <span class="text-primary-100 dark:text-orange">@yield('title_page') </span> - apply
        </h2>



        <div class="w-full py-2 overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">announcement</th>
                            <th class="px-4 py-3">student </th>
                            <th class="px-1 py-3">Email</th>

                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">

                        @foreach ($usersApplys as $usersApply)

                            <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3 text-sm">{{ $usersApply->title }}</td>
                                @foreach ($usersApply->user as $student )

                                <td class="px-1 py-2 text-sm">{{ $student->name }}</td><br>
                                @endforeach
                                <td class="px-4 py-3 text-xs">
                                    <span
                                        class="px-2 py-1 font-semibold leading-tight text-gray-500 rounded-full dark:bg-green-700 dark:text-green-100">
                                        {{ $student->email }}
                                    </span>
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
