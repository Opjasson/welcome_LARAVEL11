<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    @foreach ($posts as $post)
        <article class="py-8 max-w-screen-md border-b border-gray-300">
            <a class="hover:text-red-500 hover:underline" href="/blog/{{ $post['id'] }}">
                <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
            </a>
            <div class="text-base text-gray-500">
                <a href="#">{{ $post['author'] }}</a> | 1 january 2024
            </div>

            <p class="my-4 font-light">{{ Str::limit($post['body'],100)  }}</p>
            <a class="text-blue-500 font-medium hover:underline" href="/blog/{{ $post['id'] }}">Read more &raquo;</a>
        </article>
    @endforeach



</x-layout>
