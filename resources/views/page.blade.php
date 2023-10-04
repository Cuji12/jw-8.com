@extends('layouts.main')

@section('banner')
    <x-carousel :banners="$banners"></x-carousel>
@endsection

@section('content')
    <div class="flex flex-col max-w-5xl md:flex-row md:flex-wrap md:px-7 md:justify-between">
        <h1 class="text-2xl w-full text-blue font-bold w-full px-3 sm:px-7">{{ $content->title }}</h1>
        <section class="flex flex-col markdown-content no-block p-3 text-light-grey sm:px-7 md:w-6/12 lg:w-7/12">
            {!! $content->body !!}
            <div class="bg-light-blue rounded-md w-11/12 mx-auto h-1 md:h-full md:w-2 md:hidden"></div>
        </section>
        <div class="bg-light-blue rounded-md w-1 hidden md:block"></div>
        <aside class="flex p-3 md:w-5/12 lg:w-4/12">
            <x-pages :pages="$pages" />
        </aside>
    </div>
@endsection
