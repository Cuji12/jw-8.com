@extends('layouts.main')

@section('banner')
    <x-carousel :banners="$banners"></x-carousel>
@endsection

@section('content')
    <div>
        <h1 class="text-2xl md:text-3xl text-blue font-bold w-full px-3 sm:px-7">{{ $content->title }}</h1>
        <div class="flex flex-col p-3 max-w-7xl gap-y-6 sm:px-7 md:flex-row md:gap-x-10">
            @if (isset($content->mobile_image))
                <aside class="hidden sm:block md:w-1/3 lg:w-auto">
                    <img class="w-full max-h-[50vh] object-cover rounded-md" src="{{ asset('storage/' . $content->image) }}" alt="{{ $content->image_alt }}" />
                </aside>
                <aside class="sm:hidden w-full">
                    <img class="w-full max-h-[50vh] object-cover rounded-md" src="{{ asset('storage/' . $content->mobile_image) }}" alt="{{ $content->image_alt }}" />
                </aside>
            @else
                <aside class="md:w-1/3 lg:w-auto">
                    <img class="w-full max-h-[50vh] object-cover rounded-md" src="{{ asset('storage/' . $content->image) }}" alt="{{ $content->image_alt }}" />
                </aside>
            @endif
            <section class="markdown-content no-block md:w-2/3">
                {!! $content->body !!}
            </section>
        </div>
    </div>
@endsection
