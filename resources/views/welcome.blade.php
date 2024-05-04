@extends("layouts.master")

@section("content")






<section>
    <div class=" py-24 px-6 text-center bg-neutral-900 h-[90vh] place-content-center">
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
