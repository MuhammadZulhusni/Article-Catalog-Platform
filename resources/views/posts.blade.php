<x-Layout> <!-- panggil Layout component -->
    <x-slot:title> {{ $title }} </x-slot:title> <!-- Setkan variable title -->

    <!-- $posts array from web.php and assign here as a post-->
    @foreach ($posts as $post)

    <article class="py-8 max-w-screen-md border-b border-gray-300">
        <a href="/posts/{{ $post['slug'] }}" class="hover:underline">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
        </a>

        <div class="text-base text-gray-500">
            <a href="#">{{ $post['author'] }}</a> | {{ $post->created_at->diffForHumans() }}
        </div>
        <p class="my-4 font-light">{{ Str::limit($post['body'], 150) }}</p>     <!-- Guna string limit -->
        <a href="/posts/{{ $post['slug'] }}" class="font-medium text-blue-500 hover:underline">Read more &raquo;</a>
    </article>

    @endforeach

</x-Layout>