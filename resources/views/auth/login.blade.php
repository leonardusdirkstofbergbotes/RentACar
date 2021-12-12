@extends('layouts.master')

@section('content')

<div class="flex w-full h-screen">
    <div class="hidden md:block md:w-2/4">
        <img class="object-cover h-full md:rounded-l-xl" src="{{ URL::to('/images/loginPicture.jpg') }}">    
    </div>
    <div class="bg-gray-100 py-10 px-6 flex flex-col justify-center w-full md:w-2/4 rounded-l-xl md:rounded-l-none rounded-r-xl">
        <div class="text-center">
            <h1 class="font-extrabold text-2xl">LOGIN</h1>
            <h2 class="text-gray-600">Enter your information to login</h2>
        </div>

        <div class="mt-10 space-y-5">
            <x-inputs.stacked icon="far fa-envelope" type="email" fieldName="email" required="true">Email Address</x-inputs.stacked>
            <x-inputs.stacked icon="fas fa-lock" type="password" fieldName="password" required="true">Password</x-inputs.stacked>
        </div>

        <div class="mt-16 text-center">
            <x-buttons.primary class="w-full">LOGIN NOW</x-buttons.primary>
            <div class="mt-3">
                <span style="font-size: 14px;" class="text-gray-600">Not a user yet? <a class="no-underline text-indigo-600" href="/register">Register now</a></span>
            </div>
        </div>
    </div>
</div>

@endsection
