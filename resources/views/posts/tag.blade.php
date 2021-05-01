<x-app-layout>
  <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <h1 class="uppercase font-semibold text-gray-700 text-3xl text-center">Etiqueta: {{ $tag->name }}</h1>
  
    @foreach ($posts as $post)
     <x-card-post :post="$post" /> 
    @endforeach

    {{-- Pagination --}}
    <div class="mt-2">
      {{ $posts->links() }}
    </div>
  </div>
  
</x-app-layout>