@extends('layouts.app')

@section('title', $post->title)

@section('content')

<div class="flex min-h-96 my-12 mx-12">
    <x-sidebar />
    <div class="bg-white flex flex-col flex-grow ml-11 rounded-2xl">
        <main class="mx-10 my-12">
        <h2 class="text-xl font-normal border-b mb-5 pb-5">{{$post->title}}</h2>
            <p class="mb-8">
                {{$post->body}}
            </p>
            <div class="flex mt-12">
                <a class="text-blue-500 hover:text-blue-600 underline mr-2" href="/dashboard/posts/{{$post->id}}/edit">
                    {{ __('Edit') }}
                </a>
                <form method="POST" action="/dashboard/posts/{{$post->id}}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500 hover:text-red-600 underline">{{ __('Delete') }}</button>
                </form>
            </div>
        </main>
    </div>
</div>
@endsection('content')