@extends('layouts.master')

@section('content')
<div class=" my-16   py-16">
    <div class="max-w-lg bg-primary-100 mx-auto shadow px-6 py-7 rounded overflow-hidden">
        <h2 class="text-2xl text-white uppercase font-medium mb-1">Login</h2>
        <p class="text-white mb-6 text-sm dark:text-gray-100">Welcome! So good to have you back!</p>

                {{-- <div class="">{{ __('Login') }}</div> --}}

                <div >
                    <form method="POST" class="form " action="{{ route('login') }}">
                        @csrf

                        <div class="">
                            <label for="email" class="text-gray-100 mb-2 block dark:text-gray-100">{{ __('Email Address') }}</label>

                            <div class="">
                                <input id="email" type="email" class="block w-full border border-gray-300 px-4 py-3 text-gray-600 text-sm rounded focus:ring-0 focus:border-teal-500 placeholder-gray-400 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label for="password" class="text-gray-100 mb-2 block dark:text-gray-100">{{ __('Password') }}</label>

                            <div class="">
                                <input id="password" type="password" class="block w-full border border-gray-300 px-4 py-3 text-gray-600 text-sm rounded focus:ring-0 focus:border-teal-500 placeholder-gray-400 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label text-white" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="block w-full py-2 text-center text-white bg-teal-500 border border-teal-500 rounded hover:bg-transparent hover:text-teal-500 transition uppercase font-roboto font-medium">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link text-white" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
