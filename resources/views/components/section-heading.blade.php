@props(['value'])
<div class="relative p-3 mb-10">
    <h2 class="text-center text-3xl md:text-4xl font-bold">
        {{$value ?? "Title"}}
    </h2>
    <div class="absolute bottom-0 left-[50%] translate-x-[-50%] bg-indigo-800 w-[150px] h-[3px] rounded-full"></div>
</div>
