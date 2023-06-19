@extends('layouts.app')

@section('title', $post->title)

@section('content')

<section class="px-2 py-32 md:px-0">
    <div class="container items-center max-w-6xl px-8 mx-auto xl:px-5">
        <div>
            <img class="object-cover shadow-lg rounded-lg mb-8" src="https://images.unsplash.com/photo-1686062095342-82c090a814c0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA==&auto=format&fit=crop&w=2832&q=80" alt="image" />
            <h3 class="mb-8 text-3xl">
              {{ $post->title }}
            </h3>
            <p class="mb-8">
              {{ $post->body }}
            </p>
        </div>
    </div>
</section>

@endsection
