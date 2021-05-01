<x-app-layout>
  <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <h1 class="uppercase font-semibold text-gray-700 text-3xl text-center">Categoria: {{ $category->name }}</h1>
  
    @foreach ($posts as $post)
      <article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden">
        <img class="w-full h-72 object-cover object-center" src="{{ Storage::url($post->image->url) }}" alt="">
        
        <div class="py-4 px-8">
          <h1>
            <a href="{{ route('posts.show', $post) }}" class="font-bold text-xl mb-2">
              {{ $post->name }}
            </a>
          </h1>
          {{-- Extract --}}
          <div class="text-gray-800 text-base">
            {{ $post->extract }}
          </div>

          {{-- Tags --}}
          <div class="px-4 pt-4 pb-2">
            @foreach ($post->tags as $tag)
              <a href="" class="inline-block bg-gray-300 px-3 py-1 text-sm text-gray-800 mr-2 rounded-full">
                {{ $tag->name }}
              </a>
                
            @endforeach
          </div>
        </div>
      </article>  
    @endforeach

    {{-- Pagination --}}
    <div class="mt-2">
      {{ $posts->links() }}
    </div>
  </div>
  
</x-app-layout>