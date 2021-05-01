@props(['post'])

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
        <a href="{{ route('posts.tag', $tag) }}" class="inline-block bg-gray-300 px-3 py-1 text-sm text-gray-800 mr-2 rounded-full">
          {{ $tag->name }}
        </a>
          
      @endforeach
    </div>
  </div>
</article> 