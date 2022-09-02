{{-- @props(['image' => '']) --}}

{{-- SIDEBAR --}}
<li>
    <a href="{{ $href }}" class="scrollto active">
        <i class="material-icons">{{ $icon }}</i>
        <span>{{ $label }}</span>
    </a>
</li>

{{-- NAVBAR --}}
{{-- <li class="py-0 border-b-0 border-r-2 border-dark-600 dark:border-white last:border-r-0 last:border-b-0 w-auto cursor-pointer md:pb-4 md:pt-2 md:border-t-2 md:border-r-0">
    <a href="{{ $href }}" class="scrollto active text-dark-600 dark:text-white px-5 py-2 rounded-md text-sm font-medium no-underline uppercase md:!p-0 md:block md:w-full">
        <span>{{ $slot }}</span>
    </a>
</li> --}}