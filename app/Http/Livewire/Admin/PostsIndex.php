<?php

namespace App\Http\Livewire\Admin;
//importo al modelo
use App\Models\Post;
//importar la clase para paginar con livewire
use Livewire\WithPagination;

use Illuminate\Pagination\Paginator; 

use Livewire\Component;

class PostsIndex extends Component
{
    use WithPagination;

    //propiedad para usar estilos de Boostrap
    protected $paginationTheme = "bootstrap-5";

     

    public $search;

    //metodo para que resetee la paginación
    public function updatingSearch(){

        $this->resetPage();
    }

    public function render()
    {

        Paginator::useBootstrap();

        $posts = Post::where('user_id', auth()->user()->id)
                    ->where('name', 'LIKE', '%' . $this->search . '%')
                    ->latest('id')
                    ->paginate(10);

        return view('livewire.admin.posts-index', compact('posts'));



        
    }
}

