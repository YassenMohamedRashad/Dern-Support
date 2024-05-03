@extends("layouts.master")

@section("content")

@if (session("alert"))
<div id="sticky-alert" class="flex sticky top-0 items-center p-4 text-sm text-white bg-green-600 transition-opacity duration-500" role="alert">
    <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
    </svg>
    <div>
        {{ session("alert") }}
    </div>
</div>

<script>
    // JavaScript to make the element disappear after 1 second
    setTimeout(function() {
        var element = document.getElementById('sticky-alert');
        element.style.opacity = '0';
        setTimeout(function() {
            element.style.display = 'none';
        }, 500);
    }, 2000);
</script>
@endif




<section>
    <div class="bg-neutral-50 py-24 px-6 text-center dark:bg-neutral-900 h-[90vh] place-content-center">
        <div>
            <h1 class="mt-2 mb-2 text-5xl font-bold tracking-tight md:text-6xl xl:text-6xl text-white">
                The best services and products <br> come from us
            </h1>
            <p class="mb-7 text-gray-600">make request with your problem now</p>
            <x-main-btn :value="__('Lets Start')" :href="__('/services')" />
        </div>

    </div>
</section>

@endsection
