@extends('layouts.main')

@section('content')
    <div>
        <h1 class="text-2xl text-blue font-bold w-full px-3 sm:px-7">{{ $content->title }}</h1>
        <div class="flex flex-col p-3 max-w-7xl gap-y-4 sm:px-7 md:flex-row md:gap-x-10">
            <aside class="md:w-1/3 lg:w-auto">
                <img class="w-full max-w-xs rounded-md" src="{{ asset('storage/' . $content->image) }}" alt="{{ $content->image_alt }}" />
            </aside>
            <section class="markdown-content md:w-2/3">
                {!! $content->body !!}
            </section>
        </div>
    </div>
@endsection
