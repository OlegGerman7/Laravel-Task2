@extends('layouts.app')

@section('content')
    <section class="max-w-screen-md mx-auto px-2 py-32">
        <div class="text-center mb-16">
            <h3 class="text-3xl sm:text-4xl leading-normal font-extrabold tracking-tight text-gray-900">
              {{ __('Sign') }} <span class="text-red-500">{{ __('up') }}</span>
            </h3>
        </div>
        <form class="w-full" method="POST" action="{{ route('register') }}">
            @csrf
          <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3 mb-6 md:mb-0">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                {{ __('Name') }}
              </label>
              <input
                name="name"
                class="@error('name') is-invalid @enderror appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 transition duration-300"
                id="name"
                type="text"
                required
                autocomplete="name"
                value="{{old('name')}}"
                >
                @error('name')
                    <span class="text-red-500">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
          </div>
          <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="@error('email') is-invalid @enderror block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">
                {{ _('Email') }}
              </label>
              <input
                name="email"
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 transition duration-300"
                id="email"
                type="email"
                required
                autocomplete="email"
                value="{{old('email')}}"
                >
                @error('email')
                    <span class="text-red-500">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
          </div>
          <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3 mb-6 md:mb-0">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="password">
                {{ _('Password') }}
              </label>
              <input
                name="password"
                class="@error('password') is-invalid @enderror appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 transition duration-300"
                id="password"
                type="password"
                autocomplete="new-password"
                required
                >
                @error('password')
                <span class="text-red-500">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
          </div>
          <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="password-confirmation">
                {{__('Confirm Password')}}
              </label>
              <input
                name="password_confirmation"
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 transition duration-300"
                id="password-confirmation"
                type="password"
                autocomplete="new-password"
                required
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
