<?php

namespace App\Http\Controllers;
//modelo post

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;
use Illuminate\Support\Facades\Cache;

class PostController extends Controller
{

    //creo el metodo
    public function index(){

        /* $posts = Post::where('status', 2)->get(); */

        //solo 8 post y que me lo ordene descendente id
        
        //uso de cache con el fakade

        //si he mandado información de una página
        if (request()->page){
            $key = 'posts' . request()->page;
        }
        else {
            $key = 'posts';
        }

        if(Cache::has($key)){
            $posts = Cache::get($key);
        }
        
        else{
            $posts = Post::where('status', 2)->latest('id')->paginate(8);
            Cache::put($key, $posts);
        }
        
        return view('posts.index', compact('posts'));


    }

    public function show(Post $post){
    /*  return $post; */

        $this->authorize('published', $post);
        
        $similares = Post::where('category_id', $post->category_id)
        ->where('status', 2)
        ->where('id', '!=', $post->id)
        ->latest('id')
        ->take(4)
        ->get();


    return view('posts.show', compact('post', 'similares'));
 
} 

public function category(Category $category){

   /*  return $category; */
   $posts = Post::where('category_id', $category->id)
                    ->where('status', 2)
                    ->latest('id')
                    ->paginate(4);
            return view('posts.category', compact('posts', 'category' ));
}

public function tag(Tag $tag) {
    $posts = $tag->posts()->where('status', 2)->latest('id')->paginate(4);
    return view('posts.tag', compact('posts', 'tag'));
}

}
