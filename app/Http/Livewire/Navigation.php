<?php

namespace App\Http\Livewire;

use Livewire\Component;
//poner en le menu las categorias
use App\Models\Category;

class Navigation extends Component
{
    public function render()
    {
        $categories = Category::all();
//le paso las categorias a la vista
        return view('livewire.navigation', compact('categories'));

    }
}
