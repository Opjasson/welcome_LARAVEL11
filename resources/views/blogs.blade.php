<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>


    <article class="py-8 max-w-screen-md ">

        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post->title }}</h2>
        
        <div>
            <span class="text-black">Create by.</span><a class="hover:underline text-base text-gray-500" href="/author/{{ $post->author->username }}">{{ $post->author->name }}</a> | <a class="hover:underline text-base text-gray-500" href="/blog?category={{ $post->category->slug }}">{{ $post->category->name }}</a> | {{ $post->created_at->diffForHumans() }}
        </div>


        <p class="my-4 font-light">{{ $post->body }}</p>
        <a class="text-blue-500 font-medium hover:underline" href="/blog">&laquo; Back</a>
    </article>




</x-layout>
