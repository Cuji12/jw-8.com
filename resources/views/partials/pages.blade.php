<ul class="flex flex-col w-full">
    @foreach ($pages as $page)
        <li class="cursor-pointer hover:text-blue rounded-sm border-gray-200 border-l-2 border-r-2 border-t-2 p-3 last:border-b-2">
            <i class="fa-solid fa-earth-europe text-blue mr-1"></i>
            <a href="{{ route('site.page', ['page' => $page->slug]) }}">{{ $page->title }}</a>
        </li>
    @endforeach
</ul>
