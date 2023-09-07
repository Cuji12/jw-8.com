<ul class="flex flex-col w-full {{ $classes }}">
    @foreach ($pages as $page)
        <a class="border-l-2 border-r-2 border-t-2 last:border-b-2 rounded-sm border-gray-200 cursor-pointer hover:text-blue p-3" href="{{ route('site.page', ['page' => $page->slug]) }}">
            <li class="">
                <i class="fa-solid fa-earth-europe text-blue mr-1"></i>
                {{ $page->title }}
            </li>
        </a>
    @endforeach
</ul>
