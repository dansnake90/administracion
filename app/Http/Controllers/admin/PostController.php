<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
//importo el formRequest(reglas de validación)
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\Cache;
//fadade para mover imagen de la carpeta temporal
use Illuminate\Support\Facades\Storage;



class PostController extends Controller
{
    
    public function __construct()
    {
        //protegue las rutas
        $this->middleware('can:admin.posts.index')->only('index');    
        $this->middleware('can:admin.posts.create')->only('create', 'store');
        $this->middleware('can:admin.posts.edit')->only('edit', 'update');   
        $this->middleware('can:admin.posts.destroy')->only('destroy');     
    
      }


    public function index()
    {
        return view('admin.posts.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('name', 'id');
        $tags = Tag::all();
        return view('admin.posts.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        //almaceno la imagen en la dirección indicada
       /* return Storage::put('posts', $request->file('file')); */

      //retornar la imagen
       /* return $request->file('file'); */
       
        $post = Post::create($request->all());

        if($request->file('file')){
            $url = Storage::put('public/posts', $request->file('file'));
            $post->image()->create([
                'url' => $url
            ]);
        
        }

        //elimina todas las variables en cache para actualizar los datos
        Cache::flush();

       if($request->tags){
        //relación con metodo attach
        $post->tags()->attach($request->tags);
       }

       return redirect()->route('admin.posts.edit', $post);

    }

  
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //referencia a la policy con el metodo author
        $this->authorize('author', $post);
        $categories = Category::pluck('name', 'id');
        $tags = Tag::all();
        return view('admin.posts.edit', compact('post', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, Post $post)
    {
        //referencia a la policy con el metodo author
        $this->authorize('author', $post);

        $post->update($request->all());

        if($request->file('file')){
           $url = Storage::put('public/posts', $request->file('file'));

           if($post->image){
            Storage::delete($post->image->url);

            $post->image->update([
                'url' => $url
            ]);
            }
                else{
                    $post->image()->create([
                        'url' => $url

                    ]);
                }

        }


         //elimina todas las variables en cache para actualizar los datos
         Cache::flush();

        if($request->tags){
            //relación con metodo attach
            $post->tags()->sync($request->tags);
           }

           return redirect()->route('admin.posts.edit', $post)->with('info', 'El post se actualizó con éxito.');


        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post){
        //referencia a la policy con el metodo author
        $this->authorize('author', $post);

        $post->delete();

         //elimina todas las variables en cache para actualizar los datos
         Cache::flush();
         
        return redirect()->route('admin.posts.index', $post)->with('info', 'El post se eliminó con éxito.');

    }


    
}
