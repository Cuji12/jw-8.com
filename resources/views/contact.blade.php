@extends('layouts.main')

@section('content')
    <div>
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                <span class="closebtn inset-y-0 right-0" onclick="this.parentElement.style.display='none';">&times;</span>
                <p class="font-bold">Error!</p>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </div>
                </ul>
            </div>
        @endif
        @if(session('message'))
            <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 p-4" role="alert">
            <span class="closebtn inset-y-0 right-0" onclick="this.parentElement.style.display='none';">&times;</span>
                    <div>
                    <p class="font-bold"> {{ session('message') }}</p>
                    </div>
            </div>
        @endif
        <h1 class="text-2xl text-blue font-bold w-full px-3 sm:px-7">{{ $content->title }}</h1>
        <div class="flex flex-col p-3 gap-y-4 sm:px-7 md:flex-row md:gap-x-10">
            <section class="markdown-content md:w-2/3">
            <div class="">
                @include('components.contactform')
            </div> 
            </section>
            <aside class="md:w-1/3 lg:w-auto">
                {!! $content->body !!}
            </aside>
        </div>
    </div>
 
    


@endsection
