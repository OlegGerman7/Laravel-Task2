@extends('layouts.app')

@section('title', 'All posts')

@section('content')

  <div class="flex min-h-96 my-12 mx-12">
    <x-sidebar />
    <div class="bg-white flex flex-col flex-grow ml-11 rounded-2xl">
      <main class="mx-10 my-12">
        <div class="flex border-b mb-5 pb-5 justify-between items-center">
          <h2 class="text-xl font-normal">All Posts</h2>
          <button type="submit" class="bg-red-500 hover:bg-red-500 text-white px-6 py-2 rounded-lg">Create</button>
        </div>
        <ul>
          @foreach($posts as $post)
            <li class="flex justify-between items-center border	rounded-lg px-5 py-5 mb-5">
              <div>
                <h2 class="text-2xl mb-2 text-gray-700">{{$post->title}}</h2>
                <p class="text-gray-500">{{$post->body}}</p>
              </div>
              <div class="flex">
                <a class="text-blue-500 hover:text-blue-600 underline mr-2" href="/dashboard/posts/{{$post->id}}">
                  Show
                </a>
                <a class="text-blue-500 hover:text-blue-600 underline mr-2" href="/dashboard/posts/{{$post->id}}/edit">
                  Edit
                </a>
                <form method="POST" action="/dashboard/posts/{{$post->id}}">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="text-red-500 hover:text-red-600 underline">Delete</button>
                </form>
              </div>
            </li>
          @endforeach
        </ul>
        <a class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded-lg" href="/dashboard/posts/create">
            {{ __('Create a new post') }}
        </a>
      </main>
    </div>
  </div>

@endsection('content')