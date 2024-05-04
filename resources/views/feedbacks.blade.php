@extends("layouts.master")

@section("content")
<div class=" bg-neutral-900">
    <form class="w-3/4 m-auto p-10" method="post" action="/add_feedback/{{Auth()->user()->id}}">
    @csrf
        <div class="flex items-center px-3 py-2 rounded-lg bg-gray-50 dark:bg-gray-700">

            <textarea name="message" id="chat" rows="1" class="block mx-4 p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your Feedback..."></textarea>
            <button type="submit" class="inline-flex justify-center p-2 text-blue-600 rounded-full cursor-pointer hover:bg-blue-100 dark:text-blue-500 dark:hover:bg-gray-600">
                <svg class="w-5 h-5 rotate-90 rtl:-rotate-90" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                    <path d="m17.914 18.594-8-18a1 1 0 0 0-1.828 0l-8 18a1 1 0 0 0 1.157 1.376L8 18.281V9a1 1 0 0 1 2 0v9.281l6.758 1.689a1 1 0 0 0 1.156-1.376Z" />
                </svg>
                <span class="sr-only">Send message</span>
            </button>
        </div>
    </form>
</div>

<section class="bg-neutral-900 py-8 lg:py-16 antialiased">
    <div class="max-w-2xl mx-auto px-4">

        @foreach ($feedbacks as $feedback )
        <article class="p-6 mb-3 text-base  border-t border-gray-200 dark:border-gray-700 bg-neutral-900">
            <footer class="flex justify-between items-center mb-2">
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <button type="button" class="flex rounded-full bg-gray-800 text-sm p-2 me-5">
                            <a class="h-8 w-8 rounded-full text-white uppercase place-content-center text-lg font-bold bg-neutral-900">
                                {{$feedback->user->name[0]}}
                            </a>
                        </button>
                        <p class="text-white font-bold">{{$feedback->user->name}}</p>
                    </div>

                    <p class="ms-5 text-sm text-gray-600 dark:text-gray-400"><time pubdate datetime="2022-03-12" title="March 12th, 2022">{{$feedback->created_at}}</time></p>
                </div>
            </footer>
            <p class="text-gray-500 dark:text-gray-400">{{$feedback->message}}</p>

        </article>
        @endforeach



    </div>
</section>


@endsection
