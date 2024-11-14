<x-Layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="w-full h-[60vh] grid grid-cols-1 gap-5 justify-center items-center mt-12">
        <article class="py-10 px-5 mb-10 border-b border-slate-300 shadow-md bg-slate-300 rounded">
            <a href="/gallery/{{ $post['slug'] }}" class="hover:underline">
                <h2 class="text-3xl tracking-tight capitalize mb-3 font-bold text-gray-900">{{ $post['title'] }}</h2>
            </a>
            <div class="capitalize text-base text-gray-600">
                <a href="#">{{ $post['author'] }} | {{ $post['created_at']->diffForHumans() }}</a>
            </div>
            <p class="py-5">{{$post['body']}}</p>
            <a href="../gallery" class="capitalize font-medium text-blue-300 hover:underline">&laquo; Back to</a>
        </article>
    </div>
</x-Layout>