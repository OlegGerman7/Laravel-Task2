@extends('layouts.app')

@section('title', 'Blog')

@section('content')

<section class="max-w-screen-md mx-auto px-2 py-32">
  <div class="text-center mb-16">
      <h3 class="text-3xl sm:text-4xl leading-normal font-extrabold tracking-tight text-gray-900">
          Blog
      </h3>
  </div>
    <div class="container mx-auto px-20">
      @foreach($posts as $post)
        <div class="mb-6">
          <div class="space-y-4 lg:grid lg:grid-cols-3 lg:items-start lg:gap-6 lg:space-y-0" style="cursor: auto;">
            <a href="/blog/{{ $post->id }}" class="group">
                <div>
                  <img style="height: 100px; width: 100%;" class="object-cover shadow-lg rounded-lg" src="https://images.unsplash.com/photo-1685648343835-39d65e57e153?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1727&q=80" alt="Featured Photo" style="cursor: auto;">
                </div>
            </a>
            <div class="sm:col-span-2" style="cursor: auto;">
              <div style="cursor: auto;">
                <a href="/blog/{{ $post->id }}" class="group">
                    <h4 class="text-lg leading-6 font-semibold font-sans text-skin-inverted group-hover:text-skin-primary text-red-500 hover:text-red-700 ransition duration-300 cursor-pointer">
                      {{ $post->title }}
                    </h4>
                </a>
                <p class="mt-1 text-sm font-normal text-skin-base leading-5" style="cursor: auto;">
                  {{ $post->body }}
                </p>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
</section>
@endsection
