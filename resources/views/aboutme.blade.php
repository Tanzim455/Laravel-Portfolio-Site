@extends('layouts.navbar')

@section('content')
    <div class="bg-grey-50" id="about">
        <div class="container flex flex-col items-center py-16 md:py-20 lg:flex-row">
            <div class="w-full text-center sm:w-3/4 lg:w-3/5 lg:text-left">
                <h2 class="font-header text-4xl font-semibold uppercase text-blue-800 sm:text-5xl lg:text-6xl">
                    Who am I?
                </h2>
                <h4 class="pt-6 font-header text-xl font-medium text-black sm:text-2xl lg:text-3xl">
                    {{ $intro }}
                </h4>
                <p class="pt-6 font-body leading-relaxed text-grey-20">
                    {{ $introdescription }}
                </p>
                <div class="flex flex-col justify-center pt-6 sm:flex-row lg:justify-start">
                    <div class="flex items-center justify-center sm:justify-start">
                        <p class="font-body text-lg font-semibold uppercase text-grey-20">
                            Connect with me
                        </p>
                        <div class="hidden sm:block">
                            <i class="bx bx-chevron-right text-2xl text-blue-800"></i>
                        </div>
                    </div>
                    <div class="flex items-center justify-center pt-5 pl-2 sm:justify-start sm:pt-0">
                        <a href="/">
                            <i class="bx bxl-facebook-square text-2xl text-blue-800 hover:text-yellow"></i>
                        </a>
                        <a href="/" class="pl-4">
                            <i class="bx bxl-twitter text-2xl text-blue-800 hover:text-yellow"></i>
                        </a>
                        <a href="/" class="pl-4">
                            <i class="bx bxl-dribbble text-2xl text-blue-800 hover:text-yellow"></i>
                        </a>
                        <a href="/" class="pl-4">
                            <i class="bx bxl-linkedin text-2xl text-blue-800 hover:text-yellow"></i>
                        </a>
                        <a href="/" class="pl-4">
                            <i class="bx bxl-instagram text-2xl text-blue-800 hover:text-yellow"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="w-full pl-0 pt-10 sm:w-3/4 lg:w-2/5 lg:pl-12 lg:pt-0">
                @foreach ($skills as $item)
                    <div class="pt-6">
                        <div class="flex items-end justify-between">
                            <h4 class="font-body font-semibold uppercase text-black">{{ $item['name'] }}</h4>
                            <h3 class="font-body text-3xl font-bold text-primary">{{ $item['percentage'] }}%</h3>
                        </div>
                        <div class="mt-2 h-3 w-full rounded-full bg-lila">
                            <div class="h-3 rounded-full bg-primary" style="width: 70%"></div>
                        </div>
                    </div>
                @endforeach




            </div>
        </div>
    </div>
@endsection
