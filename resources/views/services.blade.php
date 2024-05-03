@extends("layouts.master")

@section("content")
<div class="container mx-auto md:px-6 mt-10">
    <!-- Section: Design Block -->
    <section class="text-center">
        <x-section-heading :value="__('Our Services')"/>
        <div class="grid gap-x-6 md:grid-cols-2 lg:grid-cols-4 lg:gap-x-12 p-10">


            @foreach ($services as $service)
            <a href="make_request_form/{{$service->id}}" class="mb-12 lg:mb-0 hover:bg-gray-800 hover:text-white p-5 rounded-lg transition">
                <h5 class="mb-4 text-lg font-bold">{{$service->name}}</h5>
                <p class="text-neutral-500 dark:text-neutral-300 w-100 break-words">
                    {{$service->description}}
                </p>
            </a>

            @endforeach

        </div>
    </section>
    <!-- Section: Design Block -->
</div>
<!-- Container for demo purpose -->
@endsection
