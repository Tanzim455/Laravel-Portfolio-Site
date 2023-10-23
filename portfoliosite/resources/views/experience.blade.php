@extends('layouts.navbar')

@section('content')
    <div class="container py-16 md:py-20" id="work">
        <h2
            class="text-center font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl text-blue-800">
            My work experience
        </h2>
        <h3 class="pt-6 text-center font-header text-xl font-medium text-black sm:text-2xl lg:text-3xl">
            Here's what I did before freelancing
        </h3>

        <div class="relative mx-auto mt-12 flex w-full flex-col lg:w-2/3">
            <span class="left-2/5 absolute inset-y-0 ml-10 hidden w-0.5 bg-grey-40 md:block"></span>
            @foreach ($json as $value)
                <div class="mt-8 flex flex-col text-center md:flex-row md:text-left">
                    <div class="md:w-2/5">
                        <div class="flex justify-center md:justify-start">
                            <span class="shrink-0">
                                <img src="{{ asset('images/experience/' . $value['image']) }}" class="h-auto w-32"
                                    alt="company logo">
                            </span>
                            <div class="relative ml-3 hidden w-full md:block">
                                <span class="absolute inset-x-0 top-1/2 h-0.5 -translate-y-1/2 transform bg-grey-70"></span>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-3/5">
                        <div class="relative flex md:pl-18">


                            <div class="mt-1 flex">
                                <i class="bx bxs-right-arrow hidden text-primary md:block"></i>
                                <div class="md:-mt-1 md:pl-8">
                                    <span class="block font-body font-bold text-grey-40">{{ $value['from'] }} -
                                        {{ $value['to'] }}
                                    </span>
                                    <span
                                        class="block pt-2 font-header text-xl font-bold uppercase text-primary">{{ $value['designation'] }}</span>
                                    <div class="pt-2">
                                        <span class="block font-body text-black">{{ $value['description'] }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
@endsection
