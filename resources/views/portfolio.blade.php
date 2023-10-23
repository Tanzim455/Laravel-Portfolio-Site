@extends('layouts.navbar')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>

    <body>
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
                        <h2 class=" font-header text-4xl font-semibold uppercase text-blue-800 sm:text-5xl lg:text-4xl">
                            {{ $value['name'] }}
                        </h2>
                        {{ $value['description'] }}
                        <a href="/" class="mx-auto transform transition-all hover:scale-105 md:mx-0">
                            <img src="{{ asset('images/portfolio/' . $value['image']) }}" class="w-full shadow"
                                alt="portfolio image">
                        </a>
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
    </body>

    </html>
@endsection