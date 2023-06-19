@extends('layouts.app')

@section('title', 'All Users')

@section('content')

<div class="flex min-h-96 my-12 mx-12">
   <x-sidebar />
    <div class="bg-white flex flex-col flex-grow ml-11 rounded-2xl">
        <main class="mx-10 my-12">
            <div class="flex border-b mb-5 pb-5 justify-between items-center">
                <h2 class="text-xl font-normal">All Users</h2>
                <a href="/dashboard/users/create" class="bg-red-500 hover:bg-red-500 text-white px-6 py-2 rounded-lg">Create</a>
            </div>
            <ul>
                <li class="flex justify-between items-center border	rounded-lg px-5 py-5 mb-5">
                    <div>
                        <h2 class="text-2xl mb-2 text-gray-700">User 1</h2>
                    </div>
                    <div class="flex">
                        <a class="text-blue-500 hover:text-blue-600 underline mr-2" href="/dashboard/users/show">
                            Show
                        </a>
                        <a class="text-blue-500 hover:text-blue-600 underline mr-2" href="/dashboard/users/edit">
                            Edit
                        </a>
                        <form method="POST" action="/posts/id">
                            <button type="submit" class="text-red-500 hover:text-red-600 underline">Delete</button>
                        </form>
                    </div>
                </li>
                <li class="flex justify-between items-center border	rounded-lg px-5 py-5 mb-5">
                    <div>
                        <h2 class="text-2xl mb-2 text-gray-700">User 2</h2>
                    </div>
                    <div class="flex">
                        <a class="text-blue-500 hover:text-blue-600 underline mr-2" href="/dashboard/users/show">
                            Show
                        </a>
                        <a class="text-blue-500 hover:text-blue-600 underline mr-2" href="/dashboard/users/edit">
                            Edit
                        </a>
                        <form method="POST" action="/dashboard/users/delete">
                            <button type="submit" class="text-red-500 hover:text-red-600 underline">Delete</button>
                        </form>
                    </div>
                </li>
                <li class="flex justify-between items-center border	rounded-lg px-5 py-5 mb-5">
                    <div>
                        <h2 class="text-2xl mb-2 text-gray-700">User 3</h2>
                    </div>
                    <div class="flex">
                        <a class="text-blue-500 hover:text-blue-600 underline mr-2" href="/dashboard/users/show">
                            Show
                        </a>
                        <a class="text-blue-500 hover:text-blue-600 underline mr-2" href="/dashboard/users/edit">
                            Edit
                        </a>
                        <form method="POST" action="/dashboard/users/delete">
                            <button type="submit" class="text-red-500 hover:text-red-600 underline">Delete</button>
                        </form>
                    </div>
                </li>
            </ul>
        </main>
    </div>
</div>

@endsection