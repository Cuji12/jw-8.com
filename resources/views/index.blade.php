@extends('layouts.main')

@section('banner')
    <x-carousel :banners="$banners"></x-carousel>
@endsection

@section('content')
    <div class="flex flex-col p-3 max-w-7xl md:flex-row-reverse md:gap-x-3">
        <section class="md:w-2/3">
            @foreach ($case_studies as $case_study)
                <div class="flex flex-col gap-y-3 bg-gradient-to-b from-light-blue to-white rounded-md p-3 mb-6">
                    <h2 class="text-2xl font-bold text-white">{{ $case_study->title }}</h2>
                    <p>{!! $case_study->body  !!} </p>
                </div>
            @endforeach
        </section>
        <aside class="flex md:w-1/3">
            <x-pages :pages="$pages" />
        </aside>
    </div>
@endsection
