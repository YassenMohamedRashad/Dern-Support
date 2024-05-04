@extends("layouts.master")

@section("content")

<div class="flex flex-col bg-gray-900 overflow-x-hidden h-[90vh] place-content-center">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
            <div class="overflow-y-auto m-auto max-h-[550px] overflow-x-hidden">
                <table class="w-[80%] m-auto text-left text-sm font-light text-surface dark:text-white">
                    <thead class="border-b border-neutral-200 font-medium dark:border-white/10 sticky z-10 top-0 bg-gray-950">
                        <tr>
                            <th scope="col" class="px-6 py-4">Service_name</th>
                            <th scope="col" class="px-6 py-4">Details</th>
                            <th scope="col" class="px-6 py-4">Status</th>
                            <th scope="col" class="px-6 py-4">Total Cost</th>
                        </tr>
                    </thead>
                    <div>
                        <tbody>
                            @foreach ($requests as $request )
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="whitespace-nowrap px-6 py-4 font-medium">{{$request->service->name}}</td>
                                <td class="whitespace-nowrap px-6 py-4 font-medium">{{$request->details}}</td>
                                @if ($request->status == "completed")
                                <td class="whitespace-nowrap px-6 py-4"><span class="rounded-xl bg-transparent text-green-400 border-2 p-1 border-green-400 ">{{$request->status}}</span></td>
                                @else
                                <td class="whitespace-nowrap px-6 py-4"><span class="rounded-xl bg-transparent text-orange-400 border-2 p-1 border-orange-400 ">{{$request->status}}</span></td>
                                @endif

                                <td class="whitespace-nowrap px-6 py-4">{{$request->total_cost}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </div>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
