<x-app-layout>

    <div class="container py-8">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">


         @foreach ($posts as $post)
        
            {{-- <article class="w-full h-80 bg-cover bg-center" style="background-image: url({{ asset(Storage::url($post->image->url))}})"> --}}
     
            {{-- <img src="{{ asset(Storage::url($post->image->url))}}"> --}}


            <article class="w-full h-80 bg-cover bg-center @if($loop->first) md:col-span-2  @endif " style="background-image: url(@if($post->image) {{asset(Storage::url($post->image->url))}} @else https://cdn.pixabay.com/photo/2021/08/10/18/32/cat-6536684_1280.jpg @endif );"> 
                {{-- todo ancho y alto posible, centrado, ditribuya todo el contenido, todo el contenido centrado --}}
                <div class="w-full h-full px-8 flex flex-col justify-center">

                <div>
                    {{--   --}}
                    @foreach ($post->tags as $tag)
                    <a href="{{route('posts.tag', $tag)}}" class="inline-block px-3 h-6 bg-{{$tag->color}}-600 text-white rounded-full">{{$tag->name}}</a>


                    @endforeach


                </div>

                    <h1 class="text-4xl text-white leading-8 font-blod mt-2">
                        <a href="{{route('posts.show', $post)}}">
                            {{$post->name}}
                        </a>


                    </h1>
                </div>
            </article>

         @endforeach


      </div>
{{-- paginación --}}
    </div>


    </div class="mt-4">
    {{$posts->links()}}
    </div>

</x-app-layout>