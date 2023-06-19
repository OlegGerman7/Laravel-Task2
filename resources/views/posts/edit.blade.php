@extends('layouts.app')

@section('title', 'Edit post')

@section('content')

<div class="flex min-h-96 my-12 mx-12">
    <x-sidebar />
    <div class="bg-white flex flex-col flex-grow ml-11 rounded-2xl">
        <main class="mx-10 my-12">
        <h2 class="text-xl font-normal border-b mb-5 pb-5">{{ __('Edit post') }}</h2>
        <form method="POST" action="/dashboard/posts/{{$post->id}}" class="bg-white rounded-lg">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="title" class="block text-gray-600 mb-1">{{ __('Title') }}</label>
                <input value="{{$post->title}}" type="text" id="title" name="title" required class="w-full border border-gray-200 px-3 py-2 rounded">
            </div>
            <div class="mb-4">
                <label for="body" class="block text-gray-600 mb-1">{{ __('Body') }}</label>
                <textarea rows="10" type="text" id="body" name="body" required class="w-full border border-gray-200 px-3 py-2 rounded">{{$post->body}}</textarea>
            </div>
            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white px-6 py-2 rounded-lg transition duration-300">{{ __('Update') }}</button>
        </form>
        </main>
    </div>
</div>
@endsection