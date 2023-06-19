@extends('layouts.app')

@section('content')

<div class="flex h-96 my-12 mx-12">
    <x-sidebar />
    <div class="bg-white flex flex-col flex-grow ml-11 rounded-2xl">
        <main class="mx-10 my-12">
        <h2 class="text-xl font-normal border-b mb-20 pb-5">Dashboard</h2>
        </main>
    </div>
</div>
@endsection
