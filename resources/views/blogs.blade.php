<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>


    <article class="py-8 max-w-screen-md border-b border-gray-300">

        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>

        <div class="text-base text-gray-500">
            <a href="#">{{ $post['author'] }}</a> | 1 january 2024
        </div>

        <p class="my-4 font-light">{{ $post['body'] }}</p>
        <a class="text-blue-500 font-medium hover:underline" href="/blog">Back &rsaquo;</a>
    </article>




</x-layout>
