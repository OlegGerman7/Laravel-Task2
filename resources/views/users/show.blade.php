@extends('layouts.app')

@section('title', 'Show User')

@section('content')
<div class="flex min-h-96 my-12 mx-12">
    <x-sidebar />
      <div class="bg-white flex flex-col flex-grow ml-11 rounded-2xl">
        <main class="mx-10 my-12">
          <h2 class="text-xl font-normal border-b mb-5 pb-5">User 1</h2>
          <div class="w-full">
              <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                  <div class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    First Name
                  </div>
                  <div class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 transition duration-300" id="grid-first-name">First Name</div>
                </div>
                <div class="w-full md:w-1/2 px-3">
                  <div class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                    Last Name
                  </div>
                  <div class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 transition duration-300" id="grid-first-name">Last Name</div>
                </div>
              </div>
              <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                  <div class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                    Email Address
                  </div>
                  <div class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 transition duration-300" id="grid-email">Email Address</div>
                </div>
              </div>
          </div>
        </main>
      </div>
    </div>
@endsection