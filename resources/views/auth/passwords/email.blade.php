@extends('layouts.app')

@section('content')
<section class="max-w-screen-md mx-auto px-2 py-32">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div class="text-center mb-16">
        <h3 class="text-3xl sm:text-4xl leading-normal font-extrabold tracking-tight text-gray-900">
        {{ __('Forgot') }} <span class="text-red-500">{{ __('Password') }}</span>
        </h3>
    </div>
    <form method="POST" action="{{ route('password.email') }}" class="w-96">
        @csrf
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">
                {{ __('Email') }}
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 transition duration-300"
                    id="email"
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    required
                    autocomplete="email"
                    autofocus
                >
            </div>
        </div>
        <div class="flex justify-center w-full">
            <button class="shadow bg-red-500 hover:bg-red-700 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-6 rounded transition duration-300" type="submit">
            {{ __('Submit') }}
            </button>
        </div>
    </form>
</section>
@endsection
