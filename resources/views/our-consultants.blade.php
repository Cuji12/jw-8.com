@extends('layouts.main')

@section('banner')
    <x-carousel :banners="$banners"></x-carousel>
@endsection

@section('content')
    <div>
        <h1 class="text-2xl md:text-3xl text-blue font-bold w-full px-3 sm:px-7">{{ $content->title }}</h1>
        <section class="flex flex-col markdown-content p-3 max-w-4xl text-light-grey sm:px-7">
            {!! $content->body !!}
        </section>
    </div>
@endsection
