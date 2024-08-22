<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <h3>Info kosan tersedia.</h3>
    @foreach ($posts as $post)
        <article class="py-8 max-w-screen-md border-b border-gray-300">
            <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
            <div>
                <a href="#">Anton</a> | 1 Januari 2024
            </div>
            <p class="my-4 font-light">{{ Str::limit($post['body'],100) }} </p>
            <a href="/blog/{{ $post['slug'] }}" class="font-medium text-blue-500 hover::underline">Read more &raquo;</a>
        </article>
    @endforeach
</x-layout>
