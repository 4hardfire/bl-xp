@extends('hyde::layouts.app')
@section('content')
@php($title = "About")

<main class="flex-grow">
    <!-- Banner Section -->
    <section class="bg-blue-500 text-white text-left h-[40vh] flex flex-col justify-center p-6">
        <div class="container mx-auto mt-[35px]">
            <h1 class="text-6xl font-bold">About</h1>
            <p class="text-2xl mt-4">Short description about me.</p>
        </div>
    </section>
</main>

@endsection
