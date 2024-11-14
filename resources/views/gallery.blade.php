<x-Layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="grid grid-cols-2 gap-5 mt-12">
        @foreach ($post as $res)
        <article class="py-10 px-5 max-w-screen-md border-b border-slate-300 shadow-md bg-slate-300 rounded hover:scale-105">
            <a href="/gallery/{{ $res['slug'] }}" class="hover:underline">
                <h2 class="text-3xl tracking-tight capitalize mb-3 font-bold text-gray-900">{{ $res['title'] }}</h2>
            </a>
            <div class="capitalize text-base text-gray-600">
                <a href="#">{{ $res['author'] }} | {{ $res->created_at->diffForHumans() }}</a>
            </div>
            <p class="py-5">{{ Str::limit($res['body'], 180) }}</p>
            <a href="gallery/{{ $res->slug }}" class="capitalize font-medium text-blue-300 hover:underline">Read More &raquo;</a>
        </article>
        @endforeach
    </div>
</x-Layout>