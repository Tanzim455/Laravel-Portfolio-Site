@extends('layouts.navbar')
@section('content')
    <div class="container mx-auto w-3/5">

        <div class="m-5">
            <img src="{{ asset('images/portfolio/' . $image) }}" class="xl:h-96 xl:w-4/5 h-128" alt="company logo">
            <p class="font-serif px-4 py-6 italic">{{ $description }}</p>
        </div>


    </div>
@endsection
