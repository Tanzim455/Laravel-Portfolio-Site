@extends('layouts.navbar')
@section('content')
    <div class="container py-16 md:py-20" id="portfolio">
        <h2 class="text-center font-header text-4xl font-semibold uppercase text-blue-800 sm:text-5xl lg:text-6xl">
            Check out my Portfolio
        </h2>
        <h3 class="pt-6 text-center font-header text-xl font-medium text-black sm:text-2xl lg:text-3xl">
            Here's what I have done with the past
        </h3>

        <div class="mx-auto grid w-full grid-cols-1 gap-8 pt-12 sm:w-3/4 md:gap-10 lg:w-full lg:grid-cols-2">
            @foreach ($json as $value)
                <div>
                    <a href="{{ route('singleportfolio', ['id' => $value['id']]) }}"
                        class="font-header text-4xl font-semibold uppercase text-blue-800 sm:text-5xl lg:text-4xl font-serif">
                        {{ $value['name'] }}
                    </a>

                    {{ Str::substr($value['description'], 0, 600) }}

                </div>
            @endforeach






            {{-- <a href="/" class="mx-auto transform transition-all hover:scale-105 md:mx-0">
                    <img src="/assets/img/portfolio-stripe.jpeg" class="w-full shadow" alt="portfolio image">
                </a>
                <a href="/" class="mx-auto transform transition-all hover:scale-105 md:mx-0">
                    <img src="/assets/img/portfolio-fedex.jpeg" class="w-full shadow" alt="portfolio image">
                </a>
                <a href="/" class="mx-auto transform transition-all hover:scale-105 md:mx-0">
                    <img src="/assets/img/portfolio-microsoft.jpeg" class="w-full shadow" alt="portfolio image">
                </a> --}}
        </div>
    </div>
@endsection
