@props(['value','href','styleclass'])

<a href="{{isset($href)?$href:"/"}}" type="button" class="{{'px-5 py-2 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg me-2 mb-2 text-white bg-indigo-800 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700 '}}">
    {{isset($value)?$value:"start"}}
</a>
