@extends("layouts.master")

@section("content")
<div class="mt-5">
    <x-section-heading :value="__('Make Request')" />
</div>


<form class="w-[80%] m-auto place-content-center" action="/make_request/{{$service->id}}" method="post">
    @csrf
    <div class="grid grid-cols-1 lg:gap-10 lg:grid-cols-2">

        <div>
            <div class="p-1">
                <label for="">Service Name :</label>
                <input disabled value="{{$service->name}}" type="text" class="w-full border border-gray-300 text-gray-900 rounded-lg focus:ring-indigo-800 focus:border-indigo-800">
                <input hidden name="service_id" value="{{$service->id}}" type="text">
                @error("service_id")
                <small class=" text-red-600">{{$message}}</small>
                @enderror
            </div>
            <div class="p-1">
                <label for="">Your email :</label>
                <input disabled value="{{Auth()->user()->email}}" type="text" class="w-full border border-gray-300 text-gray-900 rounded-lg focus:ring-indigo-800 focus:border-indigo-800">
                <input hidden name="user_id" value="{{Auth()->user()->id}}" type="text">
                @error("user_id")
                <small class=" text-red-600">{{$message}}</small>
                @enderror
            </div>
            <div class="p-1">
                <label for="">Enter details of request:</label>
                <input name="details" type="text" class="w-full border border-gray-300 text-gray-900 rounded-lg focus:ring-indigo-800 focus:border-indigo-800">
                @error("details")
                <small class=" text-red-600">{{$message}}</small>
                @enderror
            </div>
        </div>


        <div>
            <div class="p-1">
                <label for="">Service Cost:</label>
                <input disabled name="details" value="{{$service->cost}} $" type="text" class="w-full border border-gray-300 text-gray-900 rounded-lg focus:ring-indigo-800 focus:border-indigo-800">
            </div>
            <div class="p-1">
                <label for="">Total Cost:</label>
                <input disabled name="details" value="{{$service->cost * 1.1}} $" type="text" class="w-full border border-gray-300 text-gray-900 rounded-lg focus:ring-indigo-800 focus:border-indigo-800">
            </div>
        </div>



    </div>

    <input value="Place Service" type="submit" class="w-full mt-5 py-2 text-lg focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg me-2 mb-2 text-white bg-indigo-800 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">


</form>

@endsection
