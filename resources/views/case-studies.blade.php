@extends('layouts.main')

@section('content')
    <div>
        <h1 class="text-2xl text-blue font-bold w-full px-3 sm:px-7">{{ $content->title }}</h1>
        <div class="flex flex-col p-3 max-w-5xl gap-y-4 sm:px-7 md:justify-between md:flex-row md:flex-wrap md:gap-x-10">
            <aside class="md:w-5/12 lg:w-auto">
                <img class="w-full max-w-xs rounded-md" src="{{ asset('storage/' . $content->image) }}" alt="{{ $content->image_alt }}" />
            </aside>
            <div class="flex flex-col gap-y-4 md:w-6/12 lg:w-7/12">
                <section class="markdown-content text-light-grey">
                    {!! $content->body !!}
                </section>
            </div>
        </div>
    </div>
@endsection
